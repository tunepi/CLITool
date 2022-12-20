import SubHeader from '@/Moleclues/SubHeader';
import GitOptionLists from '@/Organisms/GitOptionLists';
import GitOptionRegisterModal from '@/Organisms/GitOptionRegisterModal';
import MainLayout from '@/Templates/MainLayout';
import React, { useState } from 'react';
import { Git } from '../type';

interface Props {
    auth: Array<Array<any>>;
    git: Git;
    gits: any;
}

const GitOptionList = ({ auth, git, gits }: Props) => {
    const [modalIsOpen, setModalIsOpen] = useState(false);
    console.log(gits);
    return (
        <MainLayout
            title={'GitOption管理'}
            auth={auth}
            headerTitle={<SubHeader headerName={git.git_name} buttonName="新規登録" setModalIsOpen={setModalIsOpen} />}
            children={
                <div className="w-full">
                    <GitOptionLists
                        gits={gits.data}
                        links={gits.links}
                        current_page={gits.current_page}
                        git_id={git.id}
                    />
                    <GitOptionRegisterModal
                        setModalIsOpen={setModalIsOpen}
                        modalIsOpen={modalIsOpen}
                        current_page={1}
                        git_id={git.id}
                    />
                </div>
            }
        />
    );
};

export default GitOptionList;
