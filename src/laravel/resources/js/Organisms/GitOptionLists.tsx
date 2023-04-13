import React from 'react';
import { useState } from 'react';
import { Button } from '@mui/material';
import PaginationList from './PaginationList';
import DetailGitOptionModal from './DetailGitOptionModal';
import { Auth, GitOption, GitOptions, Links } from '@/type';
import { CopyToClipboard } from 'react-copy-to-clipboard';
import { Popup, Button as Btn, Icon } from 'semantic-ui-react';
import FavoriteButton from './FavoriteButton ';
import MainTableLayout from '@/Moleclues/MainTableLayout';
import Pagenate from '@/Moleclues/Pagenate';

interface Props {
    gits: GitOption[];
    links: Links[];
    current_page: number;
    general: boolean;
    auth: Auth;
    redirect_url: string;
    next_url?: string;
    prev_url?: string;
}

const GitOptionLists = ({ gits, current_page, auth, general, links, redirect_url, next_url, prev_url }: Props) => {
    //詳細モーダル表示非表示用
    const [modalIsOpen, setModalIsOpen] = useState<number>();
    //useEffectフラグ用
    const [flg, setFlg] = useState<number>(0);

    const [copied, setCopied] = useState<boolean>(false);
    //詳細モーダル表示用
    const setModalOpenById = (id: number, setModalIsOpen: React.Dispatch<React.SetStateAction<number | undefined>>) => {
        setModalIsOpen(id);
    };

    //useEffect起動用フラグ
    const setOpenFlg = (flg: number, setFlg: React.Dispatch<React.SetStateAction<number>>) => {
        flg === 0 ? setFlg(1) : setFlg(0);
    };

    //お気に入り登録の有無
    const isFavoriteUrl = (git: GitOption): string => {
        if (git.user_favorite == null) {
            return 'favoriteCreate';
        } else if (git.user_favorite.is_favorite == 0) {
            return 'favoriteRegister';
        } else {
            return 'favoriteCancel';
        }
    };

    const modalClass = 'copyModal';

    const copyIcon = (number: string): JSX.Element => {
        return (
            <>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    id="_x32_"
                    x="10px"
                    y="0px"
                    viewBox="0 0 512 512"
                    width="32px"
                    height="32px"
                    opacity="1"
                >
                    <g>
                        <rect x="115.774" y="335.487" className="st0" width="194.387" height="18.588" />
                        <rect x="115.774" y="260.208" className="st0" width="194.387" height="18.527" />
                        <rect x="115.774" y="184.862" className="st0" width="194.387" height="18.588" />
                        <rect x="218.582" y="109.576" className="st0" width="91.58" height="18.588" />
                        <path
                            className="st0"
                            d="M385.112,396.188V39.614c0-2.294-0.197-4.603-0.592-6.768C381.3,14.19,365.006,0,345.438,0H184.686   c-11.561,0-22.598,4.603-30.741,12.747L53.637,112.986c-8.151,8.22-12.747,19.249-12.747,30.818v252.384   c0,21.802,17.806,39.607,39.683,39.607h264.864C367.308,435.795,385.112,417.99,385.112,396.188z M170.634,27.529v89.074   c0,9.662-3.745,13.399-13.339,13.399H68.222L170.634,27.529z M63.163,396.188V149.775h106.02c3.486,0,6.768-0.85,9.655-2.362   c4.079-2.036,7.361-5.324,9.328-9.328c1.519-2.894,2.302-6.115,2.302-9.526V22.272h154.97c7.156,0,13.331,4.33,15.959,10.574   c0.92,2.104,1.376,4.337,1.376,6.768v356.574c0,9.518-7.748,17.342-17.335,17.342H80.574   C70.98,413.53,63.163,405.706,63.163,396.188z"
                        />
                        <path
                            className="st0"
                            d="M431.488,76.205h-26.732l1.375,22.272h25.356c9.594,0,17.349,7.748,17.349,17.342v356.573   c0,9.519-7.755,17.342-17.349,17.342H166.562c-7.163,0-13.339-4.406-15.968-10.581c-0.85-2.097-1.374-4.33-1.374-6.761V456.89   h-22.272v15.503c0,2.294,0.198,4.589,0.593,6.761c3.22,18.588,19.515,32.846,39.022,32.846h264.926   c21.877,0,39.622-17.805,39.622-39.607V115.82C471.11,93.943,453.365,76.205,431.488,76.205z"
                        />
                    </g>
                </svg>
                <p id={modalClass + number} className="hidden z-50 absolute border bg-white">
                    コピーしました！
                </p>
            </>
        );
    };

    const OpenCopyModal = (id: string) => {
        const obj = document.getElementById(id);
        obj?.classList.remove('hidden');
        //1.4秒後に再度消す
        setTimeout(() => {
            obj?.classList.add('hidden');
        }, 1400);
    };

    //渡ってきた値を変数に格納
    const gitOptionData = gits.map((git: GitOption, index: number) => {
        const data = {
            ID: git.id,
            オプション名: git.git.git_name + ' ' + git.git_option,
            説明: (
                <Button
                    variant="contained"
                    color="primary"
                    onClick={() => {
                        setModalOpenById(git.id, setModalIsOpen);
                        setOpenFlg(flg, setFlg);
                    }}
                >
                    詳細
                </Button>
            ),
            モーダル: (
                <DetailGitOptionModal
                    gitOption={git}
                    detailModalIsOpen={modalIsOpen}
                    flg={flg}
                    setOpenFlg={setOpenFlg}
                    setModalOpenById={setModalOpenById}
                    current_page={current_page}
                    general={general}
                />
            ),
            コピー: (
                <CopyToClipboard text={git.git.git_name + ' ' + git.git_option} onCopy={() => setCopied(true)}>
                    <Btn
                        content={copyIcon(index.toString())}
                        className={'ml-1 mt-1'}
                        onClick={(e) => OpenCopyModal(modalClass + index.toString())}
                    />
                </CopyToClipboard>
            ),
            ブックマーク: (
                <FavoriteButton
                    user_id={auth.user.id}
                    command_id={git.id}
                    type={1}
                    url={isFavoriteUrl(git)}
                    git_id={git.git_id}
                    redirect_url={redirect_url}
                />
            ),
            更新日: git.updated_at,
            登録日: git.created_at,
        };
        return data;
    });

    //テーブルヘッダー兼key
    const target =
        general == true
            ? ['オプション名', '説明', 'コピー', 'ブックマーク']
            : ['ID', 'オプション名', '説明', 'コピー', 'ブックマーク', '更新日', '登録日'];

    return (
        <div className="hidden  sm:-my-px sm:ml-10 sm:block">
            <MainTableLayout
                th={target}
                tds={gitOptionData}
                children={<Pagenate next_url={next_url} prev_url={prev_url} />}
            />
        </div>
    );
};

export default GitOptionLists;
