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

const UserListData = (users: Props): JSX.Element[] => {
    const userData = users.users;
    const [setModalIsOpen, modalIsOpen] = useState(false);
    return userData.map((user: any) => {
        return (
            <div className="py-5" key={user['id'].toString()}>
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 bg-white border-b border-gray-200">
                            {user['name']}
                            <Button
                                variant="contained"
                                color="primary"
                                onClick={() => {
                                    modalIsOpen(true);
                                }}
                            >
                                詳細
                            </Button>
                            <Modal
                                isOpen={setModalIsOpen}
                                style={customStyles}
                                appElement={document.getElementById('app')}
                                onRequestClose={() => modalIsOpen(false)}
                            >
                                <div>氏名：{user['name']}</div>
                                <div>Email：{user['email']}</div>
                                <div>登録日：{user['created_at']}</div>
                                <Button
                                    variant="contained"
                                    color="primary"
                                    onClick={() => {
                                        modalIsOpen(false);
                                    }}
                                >
                                    閉じる
                                </Button>
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
