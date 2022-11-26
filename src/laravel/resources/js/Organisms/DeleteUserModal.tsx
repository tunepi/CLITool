import React from 'react';
import { useState, useEffect } from 'react';
import { Button as ModalButton } from '@mui/material';
import Input from '../Modules/Input';
import Modal from 'react-modal';
import { useForm } from '@inertiajs/inertia-react';
import Button from '../Atoms/Button';

interface Props {
    user: {
        id: string;
        name: string;
        email: string;
        created_at: string;
    };
    IsOpen: string;
    flg: number;
    modalIsOpen: React.Dispatch<React.SetStateAction<string>>;
    style: {
        overlay: {
            top: number;
            left: number;
            backgroundColor: string;
            transition: string;
        };
        content: {
            top: string;
            left: string;
            right: string;
            bottom: string;
            marginRight: string;
            transform: string;
            minWidth: string;
        };
    };
}

//event.target.nameの値宣言
type Name = 'id' | 'name';

const DeleteUserModal = (props: Props) => {
    const { data, setData, post, processing } = useForm({
        id: props.user.id,
        name: props.user.name,
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
                style={props.style}
                appElement={document.getElementById('app')}
                onRequestClose={() => {
                    onCloseModal(props.user.id);
                }}
                closeTimeoutMS={200}
            >
                <Input type="hidden" name="id" value={data.id} handleChange={onHandleChange} />

                <form onSubmit={deleteUser}>
                    <div className="border-2 border-block-500">
                        <div className="flex pl-10">
                            <label className={`block font-medium text-sm text-gray-700 mr-10 w-11`}>ユーザ</label>
                            <div className="ml-1">{data.name}</div>
                        </div>
                        <div className="pl-10 mt-2">
                            <p>上記ユーザを削除します。</p>
                            <p>削除した場合元には戻せません。</p>
                            <p>本当に削除してよろしいですか？</p>
                        </div>
                    </div>
                    <div className="flex items-center justify-around mt-4">
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
