import React, { useState } from 'react';
import { Head } from '@inertiajs/inertia-react';
import Authenticated from '@/Layouts/Authenticated';
import ManagementLists from '@/Components/ManagementLists';
import MainLayout from '@/Layouts/MainLayout';

const Management = (props: any) => {
    return (
        <MainLayout
            title={'management'}
            auth={props.auth}
            headerTitle={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Management</h2>}
            children={<ManagementLists />}
        />
    );
};

export default Management;
