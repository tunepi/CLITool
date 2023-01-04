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

const RegisterUserModal = ({ setModalIsOpen, modalIsOpen, current_page }: Props) => {
    const { data, setData, post, processing, errors, reset } = useForm({
        name: '',
        email: '',
        password: '',
        roll: '0',
        password_confirmation: '',
        page: current_page,
    });

    //modal非表示用
    const onCloseModal = () => {
        setModalIsOpen(false);
        reset('name', 'email', 'password', 'password_confirmation');
    };

    useEffect(() => {
        return () => {
            reset('password', 'password_confirmation');
        };
    }, []);

    const onHandleChange = (event: React.ChangeEvent<HTMLInputElement>) => {
        setData(
            event.target.name as 'email' | 'password' | 'name' | 'page',
            event.target.type === 'checkbox' ? event.target.checked + '' : event.target.value,
        );
    };

    const onHandleChangeBySelected = (event: React.ChangeEvent<HTMLSelectElement>) => {
        setData(event.target.name as 'roll', event.target.value);
    };

    const submit = (e: React.FormEvent<HTMLFormElement>) => {
        e.preventDefault();

        post(route('userRegister'), {
            onSuccess: () => {
                setModalIsOpen(false);
                reset('name', 'email', 'password', 'password_confirmation');
            },
        });
    };

    return (
        <CommonModal isOpen={modalIsOpen} onRequestClose={onCloseModal}>
            <form onSubmit={submit}>
                <ValidationErrors errors={errors} />
                <Input type="hidden" name="page" value={data.page} handleChange={onHandleChange} />
                <div>
                    <Label forInput="name" value="Name" />

                    <Input
                        type="text"
                        name="name"
                        value={data.name}
                        className="mt-1 block w-full"
                        autoComplete="name"
                        isFocused={true}
                        handleChange={onHandleChange}
                        required
                    />
                </div>

                <div className="mt-4">
                    <Label forInput="email" value="Email" />

                    <Input
                        type="email"
                        name="email"
                        value={data.email}
                        className="mt-1 block w-full"
                        autoComplete="username"
                        handleChange={onHandleChange}
                        required
                    />
                </div>

                <div className="mt-4">
                    <Label forInput="password" value="Password" />

                    <Input
                        type="password"
                        name="password"
                        value={data.password}
                        className="mt-1 block w-full"
                        autoComplete="new-password"
                        handleChange={onHandleChange}
                        required
                    />
                </div>

                <div className="mt-4">
                    <Label forInput="password_confirmation" value="Confirm Password" />

                    <Input
                        type="password"
                        name="password_confirmation"
                        value={data.password_confirmation}
                        className="mt-1 block w-full"
                        handleChange={onHandleChange}
                        required
                    />
                </div>

                <div className="mt-4">
                    <label className={`block font-medium text-sm text-gray-700 mr-10 w-11`}>権限</label>
                    <SelectBox
                        options={['一般', '管理者']}
                        name={'roll'}
                        defaultValue={data.roll == '1' ? 1 : 0}
                        handleChange={onHandleChangeBySelected}
                        className={
                            'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm'
                        }
                    />
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

export default RegisterUserModal;
