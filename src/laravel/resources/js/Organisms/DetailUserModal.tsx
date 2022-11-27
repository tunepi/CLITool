import React, { useEffect } from 'react';
import { useState } from 'react';
import { Button } from '@mui/material';
import Modal from 'react-modal';
import EditUserModal from './EditUserModal';
import ReactModal from 'react-modal';
import DeleteUserModal from './DeleteUserModal';
import CommonModal from '../Moleclues/CommonModal';

interface Props {
    user: {
        id: string;
        name: string;
        email: string;
        roll: string;
        created_at: string;
    };
    detailModalIsOpen: string;
    flg: number;
    setOpenFlg: (flg: number, setFlg: React.Dispatch<React.SetStateAction<number>>) => void;
    setModalOpenById: (id: string, setModalIsOpen: React.Dispatch<React.SetStateAction<string>>) => void;
    current_page: number;
}

const DetailUserModal = ({ user, detailModalIsOpen, flg, setOpenFlg, setModalOpenById, current_page }: Props) => {
    //詳細モーダルの表示非表示用
    const [modalIsOpen, setModalIsOpen] = useState<string>(detailModalIsOpen);
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
        setModalIsOpen(detailModalIsOpen);
    }, [flg]);

    return (
        <div>
            <CommonModal isOpen={user.id === modalIsOpen} onRequestClose={onCloseModal} id={user.id}>
                <div>
                    <div className="border-2 border-block-500">
                        <div className="flex ml-10">
                            <label className={`block font-medium text-sm text-gray-700 mr-10 w-11 `}>氏名</label>
                            {user.name}
                        </div>
                        <div className="flex ml-10 mt-2">
                            <label className={`block font-medium text-sm text-gray-700 mr-10 w-11`}>Email</label>
                            {user.email}
                        </div>
                        <div className="flex ml-10 mt-2">
                            <label className={`block font-medium text-sm text-gray-700 mr-10 w-11`}>権限</label>
                            {user.roll}
                        </div>
                        <div className="flex ml-10 mt-2">
                            <label className={`block font-medium text-sm text-gray-700 mr-10 w-11`}>登録日</label>
                            {user.created_at}
                        </div>
                    </div>
                    <div className="flex items-center justify-around mt-4 space-x-14">
                        <Button
                            variant="contained"
                            color="primary"
                            onClick={() => {
                                //modalの表示非表示制御
                                setModalOpenById(user.id, setEditModalIsOpen);
                                //2連続編集押下時の表示されない問題の対応
                                setOpenFlg(editModalFlg, setEditModalFlg);
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
                                setModalOpenById(user.id, setDeleteModalIsOpen);
                                //2連続編集押下時の表示されない問題の対応
                                setOpenFlg(deleteModalFlg, setDeleteModalFlg);
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
            </CommonModal>
            {/* 編集モーダル */}
            <EditUserModal
                user={user}
                IsOpen={editModalIsOpen}
                flg={editModalFlg}
                detailModalIsOpen={setModalIsOpen}
                current_page={current_page}
            />
            {/* 削除モーダル */}
            <DeleteUserModal
                user={user}
                IsOpen={deleteModalIsOpen}
                flg={deleteModalFlg}
                detailModalIsOpen={setModalIsOpen}
                current_page={current_page}
            />
        </div>
    );
};

export default DetailUserModal;
