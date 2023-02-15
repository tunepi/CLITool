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
import Input from '@/Moleclues/Input';
import Button from '@/Atoms/Button';

interface Props {
    auth: Auth;
    gits: Gits;
    general: boolean;
    searchGitType?: number;
    git_type?: number;
    searchWord?: string;
}

const GitList = ({ auth, gits, general, searchGitType, searchWord }: Props) => {
    const { data, post, setData, processing, errors, reset } = useForm({
        git_type: '',
        searchGitType: searchGitType,
        searchWord: searchWord == undefined ? '' : searchWord,
    });

    const [modalIsOpen, setModalIsOpen] = useState(false);

    const selectUrl = general == true ? 'gitList' : 'git';
    const searchUrl = general == true ? 'searchGeneral' : 'searchManagement';

    const onHandleChangeBySelected = (event: React.ChangeEvent<HTMLSelectElement>) => {
        setData(event.target.name as 'git_type', event.target.value);
        Inertia.visit(route(selectUrl, { git_type: event.target.value, searchWord: data.searchWord }), {
            only: ['gits', 'searchGitType', 'searchWord'],
        });
    };

    const onHandleChange = (event: React.ChangeEvent<HTMLInputElement>) => {
        setData(
            event.target.name as 'searchWord',
            event.target.type === 'checkbox' ? event.target.checked + '' : event.target.value,
        );
    };

    const search = (e: React.FormEvent<HTMLFormElement>) => {
        e.preventDefault();

        Inertia.visit(route(selectUrl, { git_type: data.searchGitType, searchWord: data.searchWord }), {
            only: ['gits', 'searchGitType', 'searchWord'],
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
                        <>
                            <form onSubmit={search} className="flex">
                                <Input
                                    type="text"
                                    name="searchWord"
                                    value={data.searchWord}
                                    handleChange={onHandleChange}
                                />
                                <Button className="ml-4 bg-gray-900 mr-4" processing={processing}>
                                    検索
                                </Button>
                                <SelectBox
                                    options={gitType}
                                    name={'git_type'}
                                    defaultValue={data.searchGitType}
                                    handleChange={onHandleChangeBySelected}
                                    className={
                                        'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm'
                                    }
                                />
                            </form>
                        </>
                    }
                />
            }
            children={
                <div className="w-full">
                    <GitLists
                        gits={gits.data}
                        current_page={gits.current_page}
                        general={general}
                        next_url={gits.next_page_url}
                        prev_url={gits.prev_page_url}
                        searchGitType={searchGitType}
                        searchWord={searchWord}
                    />
                    {general == false && (
                        <RegisterGitModal setModalIsOpen={setModalIsOpen} modalIsOpen={modalIsOpen} current_page={1} />
                    )}
                </div>
            }
        />
    );
};

export default GitList;
