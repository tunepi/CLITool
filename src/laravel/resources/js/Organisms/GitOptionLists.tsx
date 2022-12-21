import React from 'react';
import { useState } from 'react';
import { Button } from '@mui/material';
import DetailGitModal from './DetailGitModal';
import PaginationList from './PaginationList';
import NavLink from '../Atoms/NavLink';
import DetailGitOptionModal from './DetailGitOptionModal';
import { Git, GitOption, Links } from '@/type';

interface Props {
    gits: GitOption[];
    links: Links[];
    current_page: number;
    git_id: number;
}

const GitOptionListData = ({ gits, current_page, git_id }: Props): JSX.Element[] => {
    //渡ってきた値を変数に格納
    const gitOptionData = gits;
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
    return gitOptionData.map((git: GitOption) => {
        return (
            <div className="pt-5" key={git.id.toString()}>
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 bg-white border-b border-gray-200 sm:flex space-x-8">
                            <div>{git.git_option}</div>
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
                            <DetailGitOptionModal
                                gitOption={git}
                                detailModalIsOpen={modalIsOpen}
                                flg={flg}
                                setOpenFlg={setOpenFlg}
                                setModalOpenById={setModalOpenById}
                                current_page={current_page}
                                git_id={git.git_id}
                            />
                        </div>
                    </div>
                </div>
            </div>
        );
    });
};

const GitOptionLists = (props: Props) => {
    return (
        <div className="hidden  sm:-my-px sm:ml-10 sm:block">
            {GitOptionListData(props)}
            <PaginationList links={props.links} />
        </div>
    );
};

export default GitOptionLists;
