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
        backgroundColor: 'rgba(102,96,96,0.7)',
        transition: 'opacity 200ms ease-in-out',
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
type Name = 'id' | 'name';

const DeleteUserModal = (props: any) => {
    const { data, setData, post, processing } = useForm({
        id: props.user.id,
        name: props.user.name,
    });
    //modal表示非表示用
    const [modalIsOpen, setModalIsOpen] = useState<string>('');

    //modal非表示用
    const onCloseModal = (id: number) => {
        setModalIsOpen('');
        props.modalIsOpen(id);
    };

    //userEffect:props.IsOpenの値が変わるたびにコールバック関数が呼ばれる
    useEffect(() => {
        setModalIsOpen(props.IsOpen);
    }, [props.flg]);

    //更新処理を送信する
    const deleteUser = (e: React.FormEvent<HTMLFormElement>) => {
        //画面遷移を止める
        e.preventDefault();

        post(route('userDelete'));
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
                onRequestClose={() => {
                    onCloseModal(props.user.id);
                }}
                closeTimeoutMS={200}
            >
                <Input type="hidden" name="id" value={data.id} handleChange={onHandleChange} />

                <form onSubmit={deleteUser}>
                    <div>
                        ユーザ：{data.name}を削除します。 <br />
                        削除した場合元には戻せません。 <br />
                        本当に削除してよろしいですか？ <br />
                    </div>
                    <div className="p-6 bg-white border-b border-gray-200 sm:flex space-x-14">
                        <Button className="ml-4 bg-gray-900" processing={processing} children="削除" />
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

export default DeleteUserModal;
