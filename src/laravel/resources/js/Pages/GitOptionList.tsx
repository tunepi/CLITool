import NavLink from '@/Atoms/NavLink';
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
    current_page?: number;
    git_type?: number;
}

const GitOptionList = ({ auth, git, gits, general, current_page, git_type }: Props) => {
    console.log(git_type);
    const [modalIsOpen, setModalIsOpen] = useState(false);

    const gitUrl = general == true ? 'gitList' : 'git';
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
                    children={
                        <NavLink
                            href={route(gitUrl, { page: current_page, git_type: git_type })}
                            active={false}
                            children={'戻る'}
                        />
                    }
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
                        redirect_url={'gitOptionList'}
                        next_url={gits.next_page_url}
                        prev_url={gits.prev_page_url}
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
