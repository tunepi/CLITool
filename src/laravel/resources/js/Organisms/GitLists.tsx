import React from 'react';
import { useState } from 'react';
import { Button } from '@mui/material';
import DetailGitModal from './DetailGitModal';
import PaginationList from './PaginationList';
import NavLink from '../Atoms/NavLink';
import { Git, Links } from '@/type';
import MainTableLayout from '@/Moleclues/MainTableLayout';
import GitTypeName from '../Atoms/GitTypeName';
import Pagenate from '@/Moleclues/Pagenate';

interface Props {
    gits: Git[];
    current_page: number;
    general?: boolean;
    next_url?: string;
    prev_url?: string;
    searchGitType?: number;
    searchWord?: string;
}

const GitLists = ({ gits, current_page, general, next_url, prev_url, searchGitType, searchWord }: Props) => {
    //詳細モーダル表示非表示用
    const [modalIsOpen, setModalIsOpen] = useState<number>();
    //useEffectフラグ用
    const [flg, setFlg] = useState<number>(0);
    //詳細モーダル表示用
    const setModalOpenById = (id: number, setModalIsOpen: React.Dispatch<React.SetStateAction<number | undefined>>) => {
        setModalIsOpen(id);
    };

    //useEffect起動用フラグ
    const setOpenFlg = (flg: number, setFlg: React.Dispatch<React.SetStateAction<number>>) => {
        flg === 0 ? setFlg(1) : setFlg(0);
    };

    //一般・管理画面によるURLの切り替え
    const gitOptionUrl = general == true ? 'gitOptionList' : 'gitOption';

    const gitType = searchGitType == null ? '' : searchGitType;
    const gitWord = searchWord == null ? '' : searchWord;

    const nextUrl = next_url == null ? next_url : next_url + '&git_type=' + gitType + '&searchWord=' + gitWord;
    const prevUrl = prev_url == null ? prev_url : prev_url + '&git_type=' + gitType + '&searchWord=' + gitWord;

    const linkIcon = (
        <svg xmlns="http://www.w3.org/2000/svg" id="_x32_" width="16px" height="16px" viewBox="0 0 512 512">
            <g>
                <path d="M509.445,113.129c-2.547-13.219-7.047-26.141-13.453-38.359c-6.391-12.203-14.75-23.641-24.938-33.828   c-13.563-13.578-29.406-23.875-46.265-30.719c-25.297-10.219-52.828-12.781-79.266-7.656c-13.219,2.563-26.156,7-38.359,13.422   c-12.172,6.422-23.641,14.75-33.828,24.953l-66.25,66.25c-13.375,13.344-13.375,35.047,0,48.391s35.031,13.344,48.391,0   l66.25-66.281c7.031-7,15.016-12.172,23.594-15.672c12.844-5.203,27.031-6.531,40.547-3.906c6.75,1.313,13.328,3.594,19.531,6.844   c6.188,3.25,12,7.469,17.281,12.734c7.031,7.078,12.187,15.047,15.687,23.609c5.203,12.844,6.531,27.047,3.906,40.547   c-1.313,6.766-3.594,13.344-6.828,19.516c-3.281,6.219-7.484,12.031-12.765,17.313l-66.25,66.234   c-13.359,13.359-13.359,35.047,0,48.391s35.016,13.344,48.375,0l66.25-66.265c13.594-13.563,23.875-29.406,30.703-46.266   C512.008,167.083,514.555,139.551,509.445,113.129z" />
                <path d="M256.54,356.426l-66.266,66.266c-7.047,7.016-15.031,12.188-23.594,15.672   c-12.844,5.219-27.047,6.547-40.547,3.938c-6.766-1.328-13.328-3.625-19.531-6.859c-6.188-3.266-12-7.5-17.281-12.75   c-7.031-7.063-12.203-15.031-15.688-23.609c-5.203-12.828-6.531-27.031-3.922-40.563c1.313-6.75,3.609-13.328,6.844-19.516   c3.281-6.188,7.484-12,12.766-17.297l66.266-66.25c13.344-13.344,13.344-35.016,0-48.359c-13.375-13.359-35.031-13.359-48.391,0   l-66.25,66.234c-13.594,13.594-23.875,29.406-30.719,46.297c-10.234,25.266-12.781,52.844-7.672,79.219   c2.547,13.219,7.031,26.156,13.453,38.359c6.406,12.203,14.75,23.672,24.938,33.844c13.594,13.578,29.406,23.891,46.266,30.688   c25.281,10.266,52.844,12.813,79.25,7.703c13.234-2.563,26.156-7.047,38.344-13.453c12.203-6.391,23.672-14.75,33.859-24.938   l66.25-66.266c13.344-13.344,13.344-35.016,0-48.359C291.54,343.066,269.883,343.066,256.54,356.426z" />
                <path d="M342.43,169.567c-13.344-13.344-35.016-13.344-48.375,0l-124.516,124.5c-13.344,13.359-13.344,35.016,0,48.359   c13.375,13.375,35.047,13.375,48.391,0l124.5-124.5C355.805,204.567,355.805,182.926,342.43,169.567z" />
            </g>
        </svg>
    );

    //渡ってきた値を変数に格納
    const gitData = gits.map((git: Git) => {
        const data = {
            ID: git.id,
            コマンド名: git.git_name,
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
                <DetailGitModal
                    git={git}
                    detailModalIsOpen={modalIsOpen}
                    flg={flg}
                    setOpenFlg={setOpenFlg}
                    setModalOpenById={setModalOpenById}
                    current_page={current_page}
                    general={general}
                />
            ),
            リンク: (
                <NavLink
                    href={route(gitOptionUrl, {
                        id: git.id,
                        current_page: current_page,
                        searchWord: searchWord,
                        git_type: searchGitType,
                    })}
                    active={false}
                    children={linkIcon}
                />
            ),
            種別: GitTypeName(git.git_type),
            登録日: git.created_at,
        };
        return data;
    });

    //テーブルヘッダー兼key
    const target =
        general == true
            ? ['コマンド名', '種別', '説明', 'リンク']
            : ['ID', 'コマンド名', '種別', '登録日', '説明', 'リンク'];
    return (
        <div className="hidden  sm:-my-px sm:ml-10 sm:block">
            <MainTableLayout th={target} tds={gitData} children={<Pagenate next_url={nextUrl} prev_url={prevUrl} />} />
        </div>
    );
};

export default GitLists;
