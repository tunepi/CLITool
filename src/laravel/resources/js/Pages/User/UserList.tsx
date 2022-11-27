import React, { useState } from 'react';
import UserLists from '@/Organisms/UserLists';
import { Button } from '@mui/material';
import RegisterUserModal from '@/Organisms/RegisterUserModal';
import MainLayout from '@/Templates/MainLayout';

interface Props {
    auth: Array<Array<any>>;
    users: {
        links: any;
        data: any;
        current_page: number;
    };
}

const UserList = ({ auth, users }: Props) => {
    const [modalIsOpen, setModalIsOpen] = useState(false);
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
            auth={auth}
            headerTitle={header}
            children={
                <div className="w-full">
                    <UserLists users={users.data} links={users.links} current_page={users.current_page} />
                    <RegisterUserModal
                        setModalIsOpen={setModalIsOpen}
                        modalIsOpen={modalIsOpen}
                        current_page={users.current_page}
                    />
                </div>
            }
        />
    );
};

export default UserList;
