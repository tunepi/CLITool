import React, { useEffect } from 'react';
import { useState } from 'react';
import { Button } from '@mui/material';
import Modal from 'react-modal';
import EditUserModal from './EditUserModal';
import ReactModal from 'react-modal';
import DeleteUserModal from './DeleteUserModal';
import Label from './DeleteUserModal';

interface Props {
    user: {
        id: string;
        name: string;
        email: string;
        created_at: string;
    };
    detailModalIsOpen: string;
    flg: number;
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
    setOpenFlg: (flg: number, setFlg: React.Dispatch<React.SetStateAction<number>>) => void;
    setModalOpenById: (id: string, setModalIsOpen: React.Dispatch<React.SetStateAction<string>>) => void;
}

const DetailUserModal = (props: Props) => {
    //詳細モーダルの表示非表示用
    const [modalIsOpen, setModalIsOpen] = useState<string>(props.detailModalIsOpen);
    //編集用モーダル表示非表示用
    const [editModalIsOpen, setEditModalIsOpen] = useState<string>('');
    //削除用モーダル表示非表示用
    const [deleteModalIsOpen, setDeleteModalIsOpen] = useState<string>('');
    //編集用useEffectフラグ用
    const [editModalFlg, setEditModalFlg] = useState<number>(0);
    //削除用useEffectフラグ用
    const [deleteModalFlg, setDeleteModalFlg] = useState<number>(0);

    //モーダル条件の初期化
    const onCloseModal = () => {
        setModalIsOpen('');
    };

    //detailModalIsOpenの値が変わったら値をセット
    useEffect(() => {
        setModalIsOpen(props.detailModalIsOpen);
    }, [props.flg]);

    return (
        <div>
            {/* 詳細モーダル */}
            <Modal
                isOpen={props.user.id === modalIsOpen}
                style={props.style}
                appElement={document.getElementById('app')}
                onRequestClose={onCloseModal}
                closeTimeoutMS={200}
            >
                <div>
                    <div className="border-2 border-block-500">
                        <div className="flex ml-10">
                            <label className={`block font-medium text-sm text-gray-700 mr-10 w-11 `}>氏名</label>
                            {props.user.name}
                        </div>
                        <div className="flex ml-10 mt-2">
                            <label className={`block font-medium text-sm text-gray-700 mr-10 w-11`}>Email</label>
                            {props.user.email}
                        </div>
                        <div className="flex ml-10 mt-2">
                            <label className={`block font-medium text-sm text-gray-700 mr-10 w-11`}>登録日</label>
                            {props.user.created_at}
                        </div>
                    </div>
                    <div className="flex items-center justify-around mt-4 space-x-14">
                        <Button
                            variant="contained"
                            color="primary"
                            onClick={() => {
                                //modalの表示非表示制御
                                props.setModalOpenById(props.user.id, setEditModalIsOpen);
                                //2連続編集押下時の表示されない問題の対応
                                props.setOpenFlg(editModalFlg, setEditModalFlg);
                                onCloseModal();
                            }}
                        >
                            編集
                        </Button>
                        <Button
                            variant="contained"
                            color="primary"
                            onClick={() => {
                                //modalの表示非表示制御
                                props.setModalOpenById(props.user.id, setDeleteModalIsOpen);
                                //2連続編集押下時の表示されない問題の対応
                                props.setOpenFlg(deleteModalFlg, setDeleteModalFlg);
                                onCloseModal();
                            }}
                        >
                            削除
                        </Button>
                        <Button variant="contained" color="primary" onClick={onCloseModal}>
                            閉じる
                        </Button>
                    </div>
                </div>
            </Modal>
            {/* 編集モーダル */}
            <EditUserModal
                user={props.user}
                IsOpen={editModalIsOpen}
                flg={editModalFlg}
                modalIsOpen={setModalIsOpen}
                style={props.style}
            />
            {/* 削除モーダル */}
            <DeleteUserModal
                user={props.user}
                IsOpen={deleteModalIsOpen}
                flg={deleteModalFlg}
                modalIsOpen={setModalIsOpen}
                style={props.style}
            />
        </div>
    );
};

export default DetailUserModal;
