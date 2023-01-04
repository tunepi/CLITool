import React from 'react';
import { useState } from 'react';
import { Button } from '@mui/material';
import DetailGitModal from './DetailGitModal';
import PaginationList from './PaginationList';
import NavLink from '../Atoms/NavLink';
import { Git, Links } from '@/type';
import MainTableLayout from '@/Moleclues/MainTableLayout';
import GitTypeName from '../Atoms/GitTypeName';

interface Props {
    gits: Git[];
    links: Links[];
    current_page: number;
    general?: boolean;
}

const GitLists = ({ gits, links, current_page, general }: Props) => {
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
            オプションリンク: (
                <NavLink href={route(gitOptionUrl, { id: git.id })} active={false} children={'オプション画面へ'} />
            ),
            種別: GitTypeName(git.git_type),
            登録日: git.created_at,
        };
        return data;
    });

    //テーブルヘッダー兼key
    const target =
        general == true
            ? ['コマンド名', '種別', '説明', 'オプションリンク']
            : ['ID', 'コマンド名', '種別', '登録日', '説明', 'オプションリンク'];
    return (
        <div className="hidden  sm:-my-px sm:ml-10 sm:block">
            <MainTableLayout th={target} tds={gitData} />
            <PaginationList links={links} />
        </div>
    );
};

export default GitLists;
