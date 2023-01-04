import MainTableLayout from '@/Moleclues/MainTableLayout';
import MainLayout from '@/Templates/MainLayout';
import { Auth } from '@/type';
import React from 'react';

interface Props {
    auth: Auth;
}

const Favorite = ({ auth }: Props) => {
    return (
        <MainLayout
            title={'お気に入り画面'}
            auth={auth}
            headerTitle={<h2 className="font-semibold text-xl text-gray-800 leading-tight">ブックマーク</h2>}
            // children={<MainTableLayout />}
            children={<></>}
        />
    );
};

export default Favorite;
