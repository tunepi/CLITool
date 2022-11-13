import React, { useState } from 'react';
import { Head } from '@inertiajs/inertia-react';
import Authenticated from '@/Layouts/Authenticated';
import UserLists from '@/Components/UserLists';
import { Button } from '@mui/material';
import RegisterUserModal from '@/Components/RegisterUserModal';

interface Props {
    auth: Array<Array<any>>;
    users: Array<Array<any>>;
}

const customStyles = {
    overlay: {
        top: 0,
        left: 0,
        backgroundColor: 'rgba(102,96,96,0.7)',
        transition: 'opacity 200ms ease-in-out',
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

const UserList = (props: Props) => {
    const [modalIsOpen, setModalIsOpen] = useState(false);
    return (
        <Authenticated
            auth={props.auth}
            header={
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
            }
        >
            <Head title="ユーザ一覧" />
            <UserLists users={props.users} style={customStyles} />
            <RegisterUserModal setModalIsOpen={setModalIsOpen} modalIsOpen={modalIsOpen} />
        </Authenticated>
    );
};

export default UserList;
