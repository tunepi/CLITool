import React, { useState } from 'react';
import MainLayout from '@/Templates/MainLayout';
import GitLists from '../Organisms/GitLists';
import SubHeader from '../Moleclues/SubHeader';
import RegisterGitModal from '../Organisms/RegisterGitModal';

interface Props {
    auth: Array<Array<any>>;
    gits: {
        links: any;
        data: any;
        current_page: number;
    };
}

const GitList = ({ auth, gits }: Props) => {
    const [modalIsOpen, setModalIsOpen] = useState(false);
    return (
        <MainLayout
            title={'Git管理'}
            auth={auth}
            headerTitle={<SubHeader headerName="Git" buttonName="新規登録" setModalIsOpen={setModalIsOpen} />}
            children={
                <div className="w-full">
                    <GitLists gits={gits.data} links={gits.links} current_page={gits.current_page} />
                    <RegisterGitModal setModalIsOpen={setModalIsOpen} modalIsOpen={modalIsOpen} current_page={1} />
                </div>
            }
        />
    );
};

export default GitList;
