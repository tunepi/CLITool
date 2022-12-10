import React from 'react';
import { useState } from 'react';
import { Button } from '@mui/material';
import Modal from 'react-modal';
import DetailUserModal from './DetailUserModal';
import PaginationList from './PaginationList';

interface Props {
    users: Array<Array<any>>;
    links: any;
    current_page: number;
}

//ユーザ一覧JSXの作成
const UserListData = ({ users, current_page }: Props): JSX.Element[] => {
    //渡ってきた値を変数に格納
    const userData = users;
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

    return userData.map((user: any) => {
        return (
            <div className="pt-5" key={user.id.toString()}>
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 bg-white border-b border-gray-200 sm:flex space-x-8">
                            <div>{user.name}</div>
                            <Button
                                variant="contained"
                                color="primary"
                                onClick={() => {
                                    setModalOpenById(user.id, setModalIsOpen);
                                    setOpenFlg(flg, setFlg);
                                }}
                            >
                                詳細
                            </Button>
                            <DetailUserModal
                                user={user}
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

const UserLists = (props: Props): JSX.Element => {
    return (
        <div className="hidden  sm:-my-px sm:ml-10 sm:block">
            {UserListData(props)}
            <PaginationList links={props.links} />
        </div>
    );
};

export default UserLists;
