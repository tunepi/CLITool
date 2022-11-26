import React from 'react';
import Modal from 'react-modal';
import Button from '@/Components/Button';
import Input from '@/Components/Input';
import Label from '@/Components/Label';
import ValidationErrors from '@/Components/ValidationErrors';
import { useForm } from '@inertiajs/inertia-react';
import { useEffect } from 'react';
import { Button as ModalButton } from '@mui/material';

interface Props {
    setModalIsOpen: React.Dispatch<React.SetStateAction<boolean>>;
    modalIsOpen: boolean;
}

//スタイルの調整用配列
const customStyles = {
    overlay: {
        top: 0,
        left: 0,
        backgroundColor: 'rgba(102,96,96,0.7)',
        transition: 'opacity 200ms ease-in-out',
    },
    content: {
        top: '45%',
        left: '50%',
        right: 'auto',
        bottom: 'auto',
        marginRight: '-50%',
        transform: 'translate(-50%, -50%)',
        minWidth: '40%',
    },
};

const RegisterUserModal = (props: Props) => {
    const { data, setData, post, processing, errors, reset } = useForm({
        name: '',
        email: '',
        password: '',
        roll: '',
        password_confirmation: '',
    });

    //modal非表示用
    const onCloseModal = () => {
        props.setModalIsOpen(false);
        reset('name', 'email', 'password', 'password_confirmation');
    };

    useEffect(() => {
        return () => {
            reset('password', 'password_confirmation');
        };
    }, []);

    const onHandleChange = (event: React.ChangeEvent<HTMLInputElement>) => {
        setData(
            event.target.name as 'email' | 'password' | 'name',
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
                props.setModalIsOpen(false);
                reset('name', 'email', 'password', 'password_confirmation');
            },
        });
    };

    return (
        <div>
            <Modal
                isOpen={props.modalIsOpen}
                style={customStyles}
                appElement={document.getElementById('app')}
                onRequestClose={() => {
                    onCloseModal();
                }}
                closeTimeoutMS={200}
            >
                <ValidationErrors errors={errors} />

                <form onSubmit={submit}>
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
                        <select
                            name="roll"
                            onChange={(event) => {
                                onHandleChangeBySelected(event);
                            }}
                            className="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        >
                            <option value="0">一般</option>
                            <option value="1">管理者</option>
                        </select>
                    </div>

                    <div className="flex items-center justify-between mt-4">
                        <Button className="ml-4 bg-gray-900" processing={processing}>
                            新規登録
                        </Button>
                        <ModalButton variant="contained" color="primary" onClick={onCloseModal} children="戻る" />
                    </div>
                </form>
            </Modal>
        </div>
    );
};

export default RegisterUserModal;
