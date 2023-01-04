import React, { useState } from 'react';
import MainLayout from '@/Templates/MainLayout';
import GitLists from '../Organisms/GitLists';
import SubHeader from '../Moleclues/SubHeader';
import RegisterGitModal from '../Organisms/RegisterGitModal';
import { Auth, Gits } from '@/type';
import SelectBox from '@/Moleclues/SelectBox';
import { gitType } from '@/common';
import { useForm } from '@inertiajs/inertia-react';
import { Inertia } from '@inertiajs/inertia';

interface Props {
    auth: Auth;
    gits: Gits;
    general: boolean;
}

const GitList = ({ auth, gits, general }: Props) => {
    const { data, setData, processing, errors, reset } = useForm({
        git_type: '',
    });

    const [modalIsOpen, setModalIsOpen] = useState(false);

    const onHandleChangeBySelected = (event: React.ChangeEvent<HTMLSelectElement>) => {
        setData(event.target.name as 'git_type', event.target.value);
        Inertia.visit(route('gitList', { git_type: event.target.value }), {
            only: ['gits'],
        });
    };

    return (
        <MainLayout
            title={general == true ? 'Git一覧' : 'Git管理一覧'}
            auth={auth}
            headerTitle={
                <SubHeader
                    headerName="Git"
                    buttonName="新規登録"
                    setModalIsOpen={setModalIsOpen}
                    general={general}
                    children={
                        <SelectBox
                            options={gitType}
                            name={'git_type'}
                            defaultValue={data.git_type}
                            handleChange={onHandleChangeBySelected}
                            className={
                                'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm'
                            }
                        />
                    }
                />
            }
            children={
                <div className="w-full">
                    <GitLists gits={gits.data} links={gits.links} current_page={gits.current_page} general={general} />
                    {general == false && (
                        <RegisterGitModal setModalIsOpen={setModalIsOpen} modalIsOpen={modalIsOpen} current_page={1} />
                    )}
                </div>
            }
        />
    );
};

export default GitList;
