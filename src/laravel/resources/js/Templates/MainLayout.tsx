import React from 'react';
import { Head } from '@inertiajs/inertia-react';
import Authenticated from '@/Templates/Authenticated';
import Sidebar from '@/Templates/Sidebar';

interface Props {
    auth: any;
    headerTitle: any;
    title: string;
    children: any;
}

const MainLayout = (props: Props) => {
    return (
        <Authenticated
            auth={props.auth}
            header={<div className="font-semibold text-xl text-gray-800 leading-tight">{props.headerTitle}</div>}
        >
            <Head title={props.title} />
            <div className="inline-block flex center  h-full">
                <Sidebar />
                {props.children}
            </div>
        </Authenticated>
    );
};

export default MainLayout;
