import React from 'react';
import { useState } from 'react';
import { Button } from '@mui/material';
import DetailGitModal from './DetailGitModal';
import PaginationList from './PaginationList';
import NavLink from '../Atoms/NavLink';

interface Props {
    gits: Array<Array<any>>;
    links: any;
    current_page: number;
}

const GitListData = ({ gits, current_page }: Props): JSX.Element[] => {
    //渡ってきた値を変数に格納
    const gitData = gits;
    //詳細モーダル表示非表示用
    const [modalIsOpen, setModalIsOpen] = useState<string>('');
    //useEffectフラグ用
    const [flg, setFlg] = useState<number>(0);
    //詳細モーダル表示用
    const setModalOpenById = (id: string, setModalIsOpen: React.Dispatch<React.SetStateAction<string>>) => {
        setModalIsOpen(id);
    };

    //useEffect起動用フラグ
    const setOpenFlg = (flg: number, setFlg: React.Dispatch<React.SetStateAction<number>>) => {
        flg === 0 ? setFlg(1) : setFlg(0);
    };
    return gitData.map((git: any) => {
        return (
            <div className="pt-5" key={git.id.toString()}>
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 bg-white border-b border-gray-200 sm:flex space-x-8">
                            {/* <div>{git.git_name}</div> */}
                            <NavLink href="/" active={false} children={git.git_name} />
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
                            <DetailGitModal
                                git={git}
                                detailModalIsOpen={modalIsOpen}
                                flg={flg}
                                setOpenFlg={setOpenFlg}
                                setModalOpenById={setModalOpenById}
                                current_page={current_page}
                            />
                        </div>
                    </div>
                </div>
            </div>
        );
    });
};

const GitLists = (props: Props) => {
    return (
        <div className="hidden  sm:-my-px sm:ml-10 sm:block">
            {GitListData(props)}
            <PaginationList links={props.links} />
        </div>
    );
};

export default GitLists;
