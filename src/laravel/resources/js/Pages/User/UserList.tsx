import React, { useState } from 'react';
import { Head } from '@inertiajs/inertia-react';
import Authenticated from '@/Layouts/Authenticated';
import UserLists from '@/Components/UserLists';
import { Button, dividerClasses } from '@mui/material';
import RegisterUserModal from '@/Components/RegisterUserModal';
import Sidebar from '@/Components/Sidebar';
import MainLayout from '@/Layouts/MainLayout';

interface Props {
    auth: Array<Array<any>>;
    users: {
        links: any;
        data: any;
    };
}

const customStyles = {
    overlay: {
        top: 0,
        left: 0,
        backgroundColor: 'rgba(102,96,96,0.7)',
        transition: 'opacity 200ms ease-in-out',
    },
    content: {
        top: '45%',
        left: '50%',
        right: 'auto',
        bottom: 'auto',
        marginRight: '-50%',
        transform: 'translate(-50%, -50%)',
        minWidth: '40%',
    },
};

const UserList = (props: Props) => {
    const [modalIsOpen, setModalIsOpen] = useState(false);
    console.log(props);
    const header = (
        <div className="flex justify-between">
            <h2 className="font-semibold text-xl text-gray-800 leading-tight flex items-center">ユーザ一覧</h2>
            <div>
                <Button
                    variant="contained"
                    color="primary"
                    children="新規登録"
                    onClick={() => {
                        setModalIsOpen(true);
                    }}
                />
            </div>
        </div>
    );
    return (
        <MainLayout
            title={'ユーザ一覧'}
            auth={props.auth}
            headerTitle={header}
            children={
                <div className="w-full">
                    <UserLists users={props.users.data} style={customStyles} links={props.users.links} />
                    <RegisterUserModal setModalIsOpen={setModalIsOpen} modalIsOpen={modalIsOpen} />
                </div>
            }
        />
    );
};

export default UserList;
