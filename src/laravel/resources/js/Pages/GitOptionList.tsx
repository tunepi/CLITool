import SubHeader from '@/Moleclues/SubHeader';
import MainLayout from '@/Templates/MainLayout';
import React, { useState } from 'react';

interface Props {
    auth: Array<Array<any>>;
    gits: {
        links: any;
        data: any;
        current_page: number;
    };
}

const GitOptionList = ({ auth, gits }: Props) => {
    const [modalIsOpen, setModalIsOpen] = useState(false);
    return (
        <MainLayout
            title={'Git管理'}
            auth={auth}
            headerTitle={<SubHeader headerName="GitOption" buttonName="新規登録" setModalIsOpen={setModalIsOpen} />}
            children={<div className="w-full">GitOption</div>}
        />
    );
};

export default GitOptionList;
