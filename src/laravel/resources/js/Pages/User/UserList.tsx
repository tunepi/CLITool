import React, { useState } from 'react';
import { Head } from '@inertiajs/inertia-react';
import Authenticated from '@/Layouts/Authenticated';
import UserLists from '@/Components/UserLists';

interface Props {
    auth: Array<Array<any>>;
    users: Array<Array<any>>;
}

const UserList = (props: Props) => {
    return (
        <Authenticated
            auth={props.auth}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">ユーザ一覧</h2>}
        >
            <Head title="ユーザ一覧" />
            <UserLists users={props.users} />
        </Authenticated>
    );
};

export default UserList;
