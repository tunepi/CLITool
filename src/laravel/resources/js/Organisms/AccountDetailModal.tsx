import React, { useEffect } from 'react';
import { useState } from 'react';
import { Button } from '@mui/material';
import EditUserModal from './EditUserModal';
import CommonModal from '../Moleclues/CommonModal';
import CheckRoll from '../Atoms/CheckRoll';
import { User } from '../type';

interface Props {
    user: User;
    accountModalIsOpen?: number;
    setModalIsOpen: React.Dispatch<React.SetStateAction<number | undefined>>;
}

const AccountDetailModal = ({ user, accountModalIsOpen, setModalIsOpen }: Props) => {
    //編集用モーダル表示非表示用
    const [editModalIsOpen, setEditModalIsOpen] = useState<number>();
    //編集用useEffectフラグ用
    const [editModalFlg, setEditModalFlg] = useState<number>(0);

    const isProfile = 1;

    //詳細モーダル表示用
    const setModalOpenById = (id: string, setModalIsOpen: React.Dispatch<React.SetStateAction<number | undefined>>) => {
        setModalIsOpen(Number(id));
    };

    //useEffect起動用フラグ
    const setOpenFlg = (flg: number, setFlg: React.Dispatch<React.SetStateAction<number>>) => {
        flg === 0 ? setFlg(1) : setFlg(0);
    };

    //モーダル条件の初期化
    const onCloseModal = () => {
        setModalIsOpen(undefined);
    };

    return (
        <>
            <CommonModal isOpen={accountModalIsOpen == user.id} onRequestClose={onCloseModal} id={user.id}>
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
                            {CheckRoll(user.roll)}
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
                                setModalOpenById(user.id.toString(), setEditModalIsOpen);
                                // //2連続編集押下時の表示されない問題の対応
                                setOpenFlg(editModalFlg, setEditModalFlg);
                                onCloseModal();
                            }}
                        >
                            編集
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
                current_page={1}
                isProfile={isProfile}
            />
        </>
    );
};

export default AccountDetailModal;
