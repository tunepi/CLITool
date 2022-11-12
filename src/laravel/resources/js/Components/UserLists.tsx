import React from 'react';
import { useState } from 'react';
import NavLink from '@/Components/NavLink';
import { Button, Container } from '@mui/material';
import Modal from 'react-modal';
import EditUserModal from './EditUserModal';
import DetailUserModal from './DetailUserModal';

interface Props {
    users: Array<Array<any>>;
}

//スタイルの調整用配列
const customStyles = {
    overlay: {
        position: 'fixed',
        top: 0,
        left: 0,
        // backgroundColor: 'rgba(0,0,0,0.85)',
    },
    content: {
        top: '20%',
        left: '50%',
        right: 'auto',
        bottom: 'auto',
        marginRight: '-50%',
        transform: 'translate(-50%, -50%)',
        minWidth: '40%',
    },
};

//ユーザ一覧JSXの作成
const UserListData = (props: Props): JSX.Element[] => {
    //渡ってきた値を変数に格納
    const userData = props.users;
    //詳細モーダル表示非表示用
    const [modalIsOpen, setModalIsOpen] = useState<string>('');
    //useEffectフラグ用
    const [flg, setFlg] = useState<number>(0);
    //詳細モーダル表示用
    const setModalOpenById = (id: string) => {
        setModalIsOpen(id);
    };

    //useEffect起動用フラグ
    const setOpenFlg = () => {
        flg === 0 ? setFlg(1) : setFlg(0);
    };

    return userData.map((user: any) => {
        return (
            <div className="py-5" key={user.id.toString()}>
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 bg-white border-b border-gray-200 sm:flex space-x-8">
                            <div>{user.name}</div>
                            <Button
                                variant="contained"
                                color="primary"
                                onClick={() => {
                                    setModalOpenById(user.id);
                                    setOpenFlg();
                                }}
                            >
                                詳細
                            </Button>
                            <DetailUserModal user={user} detailModalIsOpen={modalIsOpen} flg={flg} />
                        </div>
                    </div>
                </div>
            </div>
        );
    });
};

const UserLists = (props: Props): JSX.Element => {
    return <div className="hidden  sm:-my-px sm:ml-10 sm:block">{UserListData(props)}</div>;
};

export default UserLists;
