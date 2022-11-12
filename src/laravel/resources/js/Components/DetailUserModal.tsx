import React, { useEffect } from 'react';
import { useState } from 'react';
import { Button } from '@mui/material';
import Modal from 'react-modal';
import EditUserModal from './EditUserModal';
import ReactModal from 'react-modal';
import DeleteUserModal from './DeleteUserModal';

interface Props {
    user: {
        id: string;
        name: string;
        email: string;
        created_at: string;
    };
    detailModalIsOpen: string;
    flg: number;
}

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

const DetailUserModal = (props: Props) => {
    //詳細モーダルの表示非表示用
    const [modalIsOpen, setModalIsOpen] = useState<string>(props.detailModalIsOpen);
    //編集用モーダル表示非表示用
    const [editModalIsOpen, setEditModalIsOpen] = useState<string>('');
    //削除用モーダル表示非表示用
    const [deleteModalIsOpen, setDeleteModalIsOpen] = useState<string>('');
    //useEffectフラグ用
    const [flg, setFlg] = useState<number>(0);

    //モーダル条件の初期化
    const onCloseModal = () => {
        setModalIsOpen('');
    };

    //編集modal表示用
    const setEditModalIsOpenById = (id: string) => {
        setEditModalIsOpen(id);
    };

    const setDeleteModalIsOpenById = (id: string) => {
        setDeleteModalIsOpen(id);
    };

    //useEffect起動用フラグ
    const setOpenFlg = () => {
        flg === 0 ? setFlg(1) : setFlg(0);
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
                style={customStyles}
                appElement={document.getElementById('app')}
                onRequestClose={onCloseModal}
            >
                <div>氏名：{props.user.name}</div>
                <div>Email：{props.user.email}</div>
                <div>登録日：{props.user.created_at}</div>
                <div className="p-6 bg-white border-b border-gray-200 sm:flex space-x-14">
                    <Button
                        variant="contained"
                        color="primary"
                        onClick={() => {
                            //modalの表示非表示制御
                            setEditModalIsOpenById(props.user.id);
                            //2連続編集押下時の表示されない問題の対応
                            setOpenFlg();
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
                            setDeleteModalIsOpenById(props.user.id);
                            //2連続編集押下時の表示されない問題の対応
                            setOpenFlg();
                            onCloseModal();
                        }}
                    >
                        削除
                    </Button>
                    <Button variant="contained" color="primary" onClick={onCloseModal}>
                        閉じる
                    </Button>
                </div>
            </Modal>
            {/* 編集モーダル */}
            <EditUserModal user={props.user} IsOpen={editModalIsOpen} flg={flg} />
            {/* 削除モーダル */}
            <DeleteUserModal user={props.user} IsOpen={deleteModalIsOpen} flg={flg} />
        </div>
    );
};

export default DetailUserModal;
