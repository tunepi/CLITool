import React from 'react';
import ManagementLists from '@/Organisms/ManagementLists';
import MainLayout from '@/Templates/MainLayout';

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
