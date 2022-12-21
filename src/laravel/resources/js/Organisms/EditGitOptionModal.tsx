import React from 'react';
import { useState, useEffect } from 'react';
import { Button as ModalButton } from '@mui/material';
import Input from '../Moleclues/Input';
import ValidationErrors from '@/Organisms/ValidationErrors';
import { useForm } from '@inertiajs/inertia-react';
import Label from '../Atoms/Label';
import Button from '../Atoms/Button';
import SelectBox from '../Moleclues/SelectBox';
import CommonModal from '../Moleclues/CommonModal';
import CheckRoll from '../Atoms/CheckRoll';
import { GitOption } from '@/type';

interface Props {
    gitOption: GitOption;
    IsOpen: number | undefined;
    flg: number;
    detailModalIsOpen: React.Dispatch<React.SetStateAction<number | undefined>>;
    current_page: number;
    isProfile?: number;
}

const EditGitOptionModal = ({ gitOption, IsOpen, flg, detailModalIsOpen, current_page, isProfile }: Props) => {
    const { data, setData, post, processing, errors, reset } = useForm({
        id: gitOption.id,
        git_id: gitOption.git_id,
        git_option: gitOption.git_option,
        description: gitOption.description,
        page: current_page,
    });

    //modal表示非表示用
    const [modalIsOpen, setModalIsOpen] = useState<number | undefined>();

    //modal非表示用
    const onCloseModal = () => {
        setModalIsOpen(undefined);
        reset('git_option');
    };

    useEffect(() => {
        setModalIsOpen(IsOpen);
    }, [flg]);

    const onHandleChange = (event: React.ChangeEvent<HTMLInputElement>) => {
        setData(
            event.target.name as 'id' | 'git_option',
            event.target.type === 'checkbox' ? event.target.checked + '' : event.target.value,
        );
    };

    const onChangeBySelectArea = (event: React.ChangeEvent<HTMLTextAreaElement>) => {
        setData(event.target.name as 'description', event.target.value);
    };

    //更新処理を送信する
    const submit = (e: React.FormEvent<HTMLFormElement>) => {
        //画面遷移を止める
        e.preventDefault();

        post(route('gitOptionUpdate'), {
            onStart: (visit) => {
                console.log(visit);
            },
            onSuccess: () => {
                setModalIsOpen(undefined);
            },
        });
    };

    return (
        <CommonModal isOpen={gitOption.id == modalIsOpen} onRequestClose={onCloseModal} id={gitOption.id}>
            <form onSubmit={submit}>
                <ValidationErrors errors={errors} />
                <Input type="hidden" name="page" value={data.page} handleChange={onHandleChange} />
                <Input type="hidden" name="id" value={data.id} handleChange={onHandleChange} />
                <Input type="hidden" name="git_id" value={data.git_id} handleChange={onHandleChange} />
                <div>
                    <Label forInput="name" value="gitオプション名" />

                    <Input
                        type="text"
                        name="git_option"
                        value={data.git_option}
                        className="mt-1 block w-full"
                        autoComplete="name"
                        isFocused={true}
                        handleChange={onHandleChange}
                        required
                    />
                </div>

                <div className="mt-4">
                    <Label forInput="password_confirmation" value="説明" />
                    <textarea
                        name="description"
                        cols={10}
                        rows={8}
                        value={data.description}
                        onChange={onChangeBySelectArea}
                        className="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    ></textarea>
                </div>

                <div className="flex items-center justify-between mt-4">
                    <Button className="ml-4 bg-gray-900" processing={processing}>
                        更新
                    </Button>
                    <ModalButton variant="contained" color="primary" onClick={onCloseModal} children="戻る" />
                </div>
            </form>
        </CommonModal>
    );
};

export default EditGitOptionModal;
