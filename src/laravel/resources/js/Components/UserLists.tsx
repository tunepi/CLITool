import React from 'react';
import { useState } from 'react';
import NavLink from '@/Components/NavLink';
import { Button, Container } from '@mui/material';
import Modal from 'react-modal';

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
const UserListData = (users: Props): JSX.Element[] => {
    //渡ってきた値を変数に格納
    const userData = users.users;
    //モーダル開閉の状態管理
    const [setModalIsOpen, modalIsOpen] = useState<string>('');

    //モーダル判断用値の設定
    const setModalOpenById = (id: string) => {
        modalIsOpen(id);
    };

    //モーダル条件の初期化
    const onCloseModal = () => {
        modalIsOpen('');
    };

    return userData.map((user: any) => {
        return (
            <div className="py-5" key={user['id'].toString()}>
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 bg-white border-b border-gray-200 sm:flex space-x-8">
                            <div>{user['name']}</div>
                            <Button
                                variant="contained"
                                color="primary"
                                onClick={() => {
                                    setModalOpenById(user['id'].toString());
                                }}
                            >
                                詳細
                            </Button>
                            {/* 詳細モーダル */}
                            <Modal
                                isOpen={user['id'].toString() === setModalIsOpen}
                                style={customStyles}
                                appElement={document.getElementById('app')}
                                onRequestClose={onCloseModal}
                            >
                                <div>氏名：{user['name']}</div>
                                <div>Email：{user['email']}</div>
                                <div>登録日：{user['created_at']}</div>
                                <div className="p-6 bg-white border-b border-gray-200 sm:flex space-x-14">
                                    <Button variant="contained" color="primary" onClick={onCloseModal}>
                                        編集
                                    </Button>
                                    <Button variant="contained" color="primary" onClick={onCloseModal}>
                                        削除
                                    </Button>
                                    <Button variant="contained" color="primary" onClick={onCloseModal}>
                                        閉じる
                                    </Button>
                                </div>
                            </Modal>
                        </div>
                    </div>
                </div>
            </div>
        );
    });
};

const UserLists = (users: Props): JSX.Element => {
    return <div className="hidden  sm:-my-px sm:ml-10 sm:block">{UserListData(users)}</div>;
};

export default UserLists;
