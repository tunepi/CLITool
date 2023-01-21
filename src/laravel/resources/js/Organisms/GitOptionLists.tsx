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

interface Props {
    gits: GitOption[];
    links: Links[];
    current_page: number;
    general: boolean;
    auth: Auth;
    redirect_url: string;
}

const GitOptionLists = ({ gits, current_page, auth, general, links, redirect_url }: Props) => {
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

    //渡ってきた値を変数に格納
    const gitOptionData = gits.map((git: GitOption) => {
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
                    <Btn content="コピー" />
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
            {/* {GitOptionListData(props)} */}
            <MainTableLayout th={target} tds={gitOptionData} />
            <PaginationList links={links} />
        </div>
    );
};

export default GitOptionLists;
