import React from 'react';
import Button from '@/Atoms/Button';
import Input from '@/Moleclues/Input';
import Label from '@/Atoms/Label';
import ValidationErrors from '@/Organisms/ValidationErrors';
import { useForm } from '@inertiajs/inertia-react';
import { useEffect } from 'react';
import { Button as ModalButton } from '@mui/material';
import CommonModal from '../Moleclues/CommonModal';

interface Props {
    setModalIsOpen: React.Dispatch<React.SetStateAction<boolean>>;
    modalIsOpen: boolean;
    current_page: number;
    git_id: number;
}

const GitOptionRegisterModal = ({ setModalIsOpen, modalIsOpen, current_page, git_id }: Props) => {
    const { data, setData, post, processing, errors, reset } = useForm({
        git_id: git_id,
        git_option: '',
        description: '',
        page: current_page,
    });

    //modal非表示用
    const onCloseModal = () => {
        setModalIsOpen(false);
        reset('git_option');
    };

    useEffect(() => {
        return () => {};
    }, []);

    const onHandleChange = (event: React.ChangeEvent<HTMLInputElement>) => {
        setData(
            event.target.name as 'git_option',
            event.target.type === 'checkbox' ? event.target.checked + '' : event.target.value,
        );
    };

    const onChangeBySelectArea = (event: React.ChangeEvent<HTMLTextAreaElement>) => {
        setData(event.target.name as 'description', event.target.value);
    };

    const submit = (e: React.FormEvent<HTMLFormElement>) => {
        e.preventDefault();

        post(route('gitOptionRegister'), {
            onSuccess: () => {
                setModalIsOpen(false);
                reset('git_option', 'description');
            },
        });
    };
    return (
        <CommonModal isOpen={modalIsOpen} onRequestClose={onCloseModal}>
            <form onSubmit={submit}>
                <ValidationErrors errors={errors} />
                <Input type="hidden" name="page" value={data.page} handleChange={onHandleChange} />
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
                        新規登録
                    </Button>
                    <ModalButton variant="contained" color="primary" onClick={onCloseModal} children="戻る" />
                </div>
            </form>
        </CommonModal>
    );
};

export default GitOptionRegisterModal;
