import React, { useState } from 'react';
import UserLists from '@/Organisms/UserLists';
import { Button } from '@mui/material';
import RegisterUserModal from '@/Organisms/RegisterUserModal';
import MainLayout from '@/Templates/MainLayout';
import SubHeader from '../Moleclues/SubHeader';
import { Auth, Users } from '@/type';

interface Props {
    auth: Auth;
    users: Users;
}

const UserList = ({ auth, users }: Props) => {
    const [modalIsOpen, setModalIsOpen] = useState(false);
    const header = <SubHeader headerName="ユーザ一覧" buttonName="新規登録" setModalIsOpen={setModalIsOpen} />;
    return (
        <MainLayout
            title={'ユーザ一覧'}
            auth={auth}
            headerTitle={header}
            children={
                <div className="w-full">
                    <UserLists
                        users={users.data}
                        current_page={users.current_page}
                        next_url={users.next_page_url}
                        prev_url={users.prev_page_url}
                    />
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
