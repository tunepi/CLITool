import React from 'react';
import { Head } from '@inertiajs/inertia-react';
import Authenticated from '@/Layouts/Authenticated';
import Sidebar from '@/Components/Sidebar';

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
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">{props.headerTitle}</h2>}
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
