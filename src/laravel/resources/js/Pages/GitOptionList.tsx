import SubHeader from '@/Moleclues/SubHeader';
import GitOptionLists from '@/Organisms/GitOptionLists';
import RegisterGitOptionModal from '@/Organisms/RegisterGitOptionModal';
import MainLayout from '@/Templates/MainLayout';
import React, { useState } from 'react';
import { Auth, Git, GitOptions } from '../type';

interface Props {
    auth: Auth;
    git: Git;
    gits: GitOptions;
    general: boolean;
}

const GitOptionList = ({ auth, git, gits, general }: Props) => {
    const [modalIsOpen, setModalIsOpen] = useState(false);
    return (
        <MainLayout
            title={general == true ? 'GitOption一覧' : 'GitOption管理'}
            auth={auth}
            headerTitle={
                <SubHeader
                    headerName={git.git_name}
                    buttonName="新規登録"
                    setModalIsOpen={setModalIsOpen}
                    general={general}
                />
            }
            children={
                <div className="w-full">
                    <GitOptionLists
                        gits={gits.data}
                        links={gits.links}
                        current_page={gits.current_page}
                        general={general}
                        auth={auth}
                        git_name={git.git_name}
                    />
                    {general == false && (
                        <RegisterGitOptionModal
                            setModalIsOpen={setModalIsOpen}
                            modalIsOpen={modalIsOpen}
                            current_page={1}
                            git_id={git.id}
                        />
                    )}
                </div>
            }
        />
    );
};

export default GitOptionList;
