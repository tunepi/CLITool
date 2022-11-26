import React from 'react';
import { useState, useEffect } from 'react';
import { Button as ModalButton } from '@mui/material';
import Input from './Input';
import Modal from 'react-modal';
import ValidationErrors from '@/Components/ValidationErrors';
import { useForm } from '@inertiajs/inertia-react';
import Label from './Label';
import Button from './Button';
import SelectBox from './SelectBox';

interface Props {
    user: {
        id: string;
        name: string;
        email: string;
        roll: string;
        created_at: string;
    };
    IsOpen: string;
    flg: number;
    modalIsOpen: React.Dispatch<React.SetStateAction<string>>;
    style: any;
}
//event.target.nameの値宣言
type Name = 'id' | 'name' | 'email' | 'created_at';

const EditUserModal = (props: Props) => {
    //useFormで使用する変数の宣言
    const { data, setData, post, processing, errors } = useForm({
        id: props.user.id,
        name: props.user.name,
        email: props.user.email,
        roll: props.user.roll,
        created_at: props.user.created_at,
    });

    //modal表示非表示用
    const [modalIsOpen, setModalIsOpen] = useState<string>('');

    //modal非表示用
    const onCloseModal = (id: string) => {
        setModalIsOpen('');
        props.modalIsOpen(id);
    };

    //userEffect:props.IsOpenの値が変わるたびにコールバック関数が呼ばれる
    useEffect(() => {
        setModalIsOpen(props.IsOpen);
    }, [props.flg]);

    //更新処理を送信する
    const submit = (e: React.FormEvent<HTMLFormElement>) => {
        //画面遷移を止める
        e.preventDefault();

        post(route('userUpdate'), {
            onSuccess: () => {
                setModalIsOpen('');
            },
            onStart: (visit) => {
                console.log(visit);
            },
        });
    };

    //テキストボックスないの値が変わるたびにvalueの値を最新のものに更新してくれる
    //非同期で送信する際にいちいちテキストボックスの値を取得しなくても良くなる？
    const onHandleChange = (event: React.ChangeEvent<HTMLInputElement>) => {
        setData(event.target.name as Name, event.target.value);
    };

    const onHandleChangeBySelected = (event: React.ChangeEvent<HTMLSelectElement>) => {
        console.log(event.target.value);
        setData(event.target.name as 'roll', event.target.value);
    };

    return (
        <div>
            <Modal
                isOpen={props.user.id === modalIsOpen}
                style={props.style}
                appElement={document.getElementById('app')}
                onRequestClose={() => {
                    onCloseModal(props.user.id);
                }}
                closeTimeoutMS={200}
            >
                <ValidationErrors errors={errors} />
                <Input type="hidden" name="id" value={data.id} handleChange={onHandleChange} />

                <form onSubmit={submit}>
                    <div>
                        <Label forInput="name" value="氏名" />
                        <Input
                            type="text"
                            name="name"
                            value={data.name}
                            className="mt-1 w-full"
                            isFocused={true}
                            handleChange={onHandleChange}
                        />
                    </div>
                    <div className="mt-5">
                        <Label forInput="email" value="Email" />
                        <Input
                            type="text"
                            name="email"
                            value={data.email}
                            className="mt-1 w-full"
                            isFocused={true}
                            handleChange={onHandleChange}
                        />
                    </div>
                    <div className="mt-5">
                        <label className={`block font-medium text-sm text-gray-700 mr-10 w-11`}>権限</label>
                        <select
                            name="roll"
                            defaultValue={data.roll == '管理者' ? '1' : '0'}
                            onChange={(event) => {
                                onHandleChangeBySelected(event);
                            }}
                            className="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        >
                            <option value="0">一般</option>
                            <option value="1">管理者</option>
                        </select>
                    </div>
                    <div className="mt-5">
                        <label className={`block font-medium text-sm text-gray-700 mr-10 w-11`}>登録日</label>
                        <div className="ml-1">{data.created_at}</div>
                    </div>
                    <div className="flex items-center justify-between mt-4">
                        <Button className="ml-4 bg-gray-900" processing={processing} children="更新" />
                        <ModalButton
                            variant="contained"
                            color="primary"
                            onClick={() => {
                                onCloseModal(props.user.id);
                            }}
                            children="戻る"
                        />
                    </div>
                </form>
            </Modal>
        </div>
    );
};

export default EditUserModal;
