import React, { useState } from 'react';
import { Head } from '@inertiajs/inertia-react';
import Authenticated from '@/Layouts/Authenticated';
import ManagementLists from '@/Components/ManagementLists';

const Management = (props: any) => {
    return (
        <Authenticated
            auth={props.auth}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Management</h2>}
        >
            <Head title="Management" />

            <ManagementLists />
        </Authenticated>
    );
};

export default Management;
