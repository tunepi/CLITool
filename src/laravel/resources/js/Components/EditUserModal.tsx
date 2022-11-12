import React from 'react';
import { useState, useEffect } from 'react';
import { Button as ModalButton } from '@mui/material';
import Input from './Input';
import Modal from 'react-modal';
import ValidationErrors from '@/Components/ValidationErrors';
import { useForm } from '@inertiajs/inertia-react';
import Label from './Label';
import Button from './Button';

//スタイルの調整用配列
const customStyles = {
    overlay: {
        top: 0,
        left: 0,
        // backgroundColor: 'rgba(0,0,0,0.85)',
    },
    content: {
        top: '20%',
        left: '50%',
        right: 'auto',
        bottom: 'auto',
        marginRight: '-50%',
        transform: 'translate(-50%, -50%)',
        minWidth: '40%',
    },
};

//event.target.nameの値宣言
type Name = 'id' | 'name' | 'email' | 'created_at';

const EditUserModal = (props: any) => {
    //useFormで使用する変数の宣言
    const { data, setData, post, processing, errors } = useForm({
        id: props.user.id,
        name: props.user.name,
        email: props.user.email,
        created_at: props.user.created_at,
    });

    //modal表示非表示用
    const [modalIsOpen, setModalIsOpen] = useState<string>('');

    //modal非表示用
    const onCloseModal = () => {
        setModalIsOpen('');
    };

    //userEffect:props.IsOpenの値が変わるたびにコールバック関数が呼ばれる
    useEffect(() => {
        setModalIsOpen(props.IsOpen);
    }, [props.flg]);

    //更新処理を送信する
    const submit = (e: React.FormEvent<HTMLFormElement>) => {
        //画面遷移を止める
        e.preventDefault();

        post(route('userUpdate'));
    };

    //テキストボックスないの値が変わるたびにvalueの値を最新のものに更新してくれる
    //非同期で送信する際にいちいちテキストボックスの値を取得しなくても良くなる？
    const onHandleChange = (event: React.ChangeEvent<HTMLInputElement>) => {
        setData(event.target.name as Name, event.target.value);
    };

    return (
        <div>
            <Modal
                isOpen={props.user.id === modalIsOpen}
                style={customStyles}
                appElement={document.getElementById('app')}
                onRequestClose={onCloseModal}
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
                    <div>
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
                    <div>登録日：{data.created_at}</div>
                    <div className="p-6 bg-white border-b border-gray-200 sm:flex space-x-14">
                        <Button className="ml-4 bg-gray-900" processing={processing} children="更新" />
                        <ModalButton variant="contained" color="primary" onClick={onCloseModal} children="戻る" />
                    </div>
                </form>
            </Modal>
        </div>
    );
};

export default EditUserModal;
