import React from 'react';
import Button from '@/Atoms/Button';
import Input from '@/Moleclues/Input';
import Label from '@/Atoms/Label';
import ValidationErrors from '@/Organisms/ValidationErrors';
import { useForm } from '@inertiajs/inertia-react';
import { useEffect } from 'react';
import { Button as ModalButton } from '@mui/material';
import SelectBox from '../Moleclues/SelectBox';
import CommonModal from '../Moleclues/CommonModal';

interface Props {
    setModalIsOpen: React.Dispatch<React.SetStateAction<boolean>>;
    modalIsOpen: boolean;
    current_page: number;
}

const RegisterGitModal = ({ setModalIsOpen, modalIsOpen, current_page }: Props) => {
    const { data, setData, post, processing, errors, reset } = useForm({
        git_name: '',
        git_type: '',
        description: '',
        page: current_page,
    });

    const gitType = [
        'Setup and Config',
        'Getting and Creating Projects',
        'Basic Snapshotting',
        'Branching and Merging',
        'Sharing and Updating Projects',
        'Inspection and Comparison',
        'Patching',
        'Debugging',
        'Guides',
        'Email',
        'External Systems',
        'Administration',
        'Server Admin',
        'Plumbing Commands',
    ];

    //modal非表示用
    const onCloseModal = () => {
        setModalIsOpen(false);
        reset('git_name');
    };

    useEffect(() => {
        return () => {};
    }, []);

    const onHandleChange = (event: React.ChangeEvent<HTMLInputElement>) => {
        setData(
            event.target.name as 'git_name',
            event.target.type === 'checkbox' ? event.target.checked + '' : event.target.value,
        );
    };

    const onHandleChangeBySelected = (event: React.ChangeEvent<HTMLSelectElement>) => {
        setData(event.target.name as 'git_type', event.target.value);
    };

    const onChangeBySelectArea = (event: React.ChangeEvent<HTMLTextAreaElement>) => {
        setData(event.target.name as 'description', event.target.value);
    };

    const submit = (e: React.FormEvent<HTMLFormElement>) => {
        e.preventDefault();

        post(route('gitRegister'), {
            onSuccess: () => {
                setModalIsOpen(false);
                reset('git_name', 'git_type', 'description');
            },
        });
    };
    return (
        <CommonModal isOpen={modalIsOpen} onRequestClose={onCloseModal}>
            <form onSubmit={submit}>
                <ValidationErrors errors={errors} />
                <Input type="hidden" name="page" value={data.page} handleChange={onHandleChange} />
                <div>
                    <Label forInput="name" value="gitコマンド名" />

                    <Input
                        type="text"
                        name="git_name"
                        value={data.git_name}
                        className="mt-1 block w-full"
                        autoComplete="name"
                        isFocused={true}
                        handleChange={onHandleChange}
                        required
                    />
                </div>

                <div className="mt-4">
                    <label className={`block font-medium text-sm text-gray-700 mr-10 w-11`}>種別</label>
                    <SelectBox
                        options={gitType}
                        name={'git_type'}
                        defaultValue={data.description == '管理者' ? '1' : '0'}
                        handleChange={onHandleChangeBySelected}
                        className={
                            'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm'
                        }
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

export default RegisterGitModal;
