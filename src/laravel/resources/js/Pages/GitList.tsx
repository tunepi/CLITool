import React, { useState } from 'react';
import MainLayout from '@/Templates/MainLayout';
import GitLists from '../Organisms/GitLists';
import SubHeader from '../Moleclues/SubHeader';
import RegisterGitModal from '../Organisms/RegisterGitModal';

interface Props {
    auth: any;
}

const GitList = (props: Props) => {
    const [modalIsOpen, setModalIsOpen] = useState(false);
    return (
        <MainLayout
            title={'Git管理'}
            auth={props.auth}
            headerTitle={<SubHeader headerName="Git" buttonName="新規登録" setModalIsOpen={setModalIsOpen} />}
            children={
                <div className="w-full">
                    <GitLists />
                    <RegisterGitModal setModalIsOpen={setModalIsOpen} modalIsOpen={modalIsOpen} current_page={1} />
                </div>
            }
        />
    );
};

export default GitList;
