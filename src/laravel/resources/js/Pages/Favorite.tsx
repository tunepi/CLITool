import { COMMAND } from '@/common';
import MainTableLayout from '@/Moleclues/MainTableLayout';
import SelectBox from '@/Moleclues/SelectBox';
import SubHeader from '@/Moleclues/SubHeader';
import GitOptionLists from '@/Organisms/GitOptionLists';
import MainLayout from '@/Templates/MainLayout';
import { Auth } from '@/type';
import { Inertia } from '@inertiajs/inertia';
import { useForm } from '@inertiajs/inertia-react';
import React, { useState } from 'react';

interface Props {
    auth: Auth;
    favorites: any;
    searchCommandType: number;
}

const Favorite = ({ auth, favorites, searchCommandType }: Props) => {
    console.log(favorites);

    const { data, setData, processing, errors, reset } = useForm({
        command_type: '',
    });

    const [modalIsOpen, setModalIsOpen] = useState(false);

    const onHandleChangeBySelected = (event: React.ChangeEvent<HTMLSelectElement>) => {
        setData(event.target.name as 'command_type', event.target.value);
        Inertia.visit(route('favorite', { command_type: event.target.value }), {
            only: ['favorites', 'searchCommandType'],
        });
    };

    const favoriteData: [] = favorites.data.map((favorite: any) => {
        const isFavorite = {
            is_favorite: favorite.is_favorite,
        };
        const gitData = favorite.git;
        gitData.user_favorite = isFavorite;
        return gitData;
    });

    const childrenElement = (
        <GitOptionLists
            gits={favoriteData}
            links={favorites.links}
            current_page={favorites.current_page}
            general={true}
            auth={auth}
            redirect_url={'favorite'}
        />
    );
    return (
        <MainLayout
            title={'お気に入り画面'}
            auth={auth}
            headerTitle={
                <SubHeader
                    headerName="ブックマーク"
                    setModalIsOpen={setModalIsOpen}
                    general={true}
                    children={
                        <SelectBox
                            options={COMMAND}
                            name={'git_type'}
                            defaultValue={searchCommandType}
                            handleChange={onHandleChangeBySelected}
                            className={
                                'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm'
                            }
                        />
                    }
                />
            }
            children={<div className="w-full">{childrenElement}</div>}
        />
    );
};

export default Favorite;
