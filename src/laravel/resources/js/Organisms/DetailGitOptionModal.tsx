import React from 'react';
import { useState, useEffect } from 'react';
import { Button } from '@mui/material';
import Modal from 'react-modal';
import CommonModal from '../Moleclues/CommonModal';
import GitTypeName from '../Atoms/GitTypeName';
import { GitOption } from '../type';
import EditGitOptionModal from './EditGitOptionModal';
import DeleteGitOptionModal from './DeleteGitOptionModal';

interface Props {
    gitOption: GitOption;
    detailModalIsOpen: number | undefined;
    flg: number;
    setOpenFlg: (flg: number, setFlg: React.Dispatch<React.SetStateAction<number>>) => void;
    setModalOpenById: (id: number, setModalIsOpen: React.Dispatch<React.SetStateAction<number | undefined>>) => void;
    current_page: number;
    general: boolean;
}

const DetailGitOptionModal = ({
    gitOption,
    detailModalIsOpen,
    flg,
    setOpenFlg,
    setModalOpenById,
    current_page,
    general,
}: Props) => {
    //詳細モーダルの表示非表示用
    const [modalIsOpen, setModalIsOpen] = useState<number | undefined>(detailModalIsOpen);
    //編集用モーダル表示非表示用
    const [editModalIsOpen, setEditModalIsOpen] = useState<number>();
    //削除用モーダル表示非表示用
    const [deleteModalIsOpen, setDeleteModalIsOpen] = useState<number>();
    //編集用useEffectフラグ用
    const [editModalFlg, setEditModalFlg] = useState<number>(0);
    //削除用useEffectフラグ用
    const [deleteModalFlg, setDeleteModalFlg] = useState<number>(0);

    //モーダル条件の初期化
    const onCloseModal = () => {
        setModalIsOpen(undefined);
    };

    //detailModalIsOpenの値が変わったら値をセット
    useEffect(() => {
        setModalIsOpen(detailModalIsOpen);
    }, [flg]);

    return (
        <div>
            <CommonModal isOpen={gitOption.id === modalIsOpen} onRequestClose={onCloseModal} id={gitOption.id}>
                <div>
                    <div className="border-2 border-block-500">
                        <div className="flex ml-10">
                            <label className={`block font-medium text-sm text-gray-700 mr-10 w-13`}>
                                gitオプション名
                            </label>
                            {gitOption.git_option}
                        </div>
                        <div className="flex ml-10 mt-2">
                            <label className={`block font-medium text-sm text-gray-700 mr-10 w-13`}>説明</label>
                            {gitOption.description}
                        </div>
                        <div className="flex ml-10 mt-2">
                            <label className={`block font-medium text-sm text-gray-700 mr-10 w-13`}>登録日</label>
                            {gitOption.created_at}
                        </div>
                    </div>
                    <div className="flex items-center justify-around mt-4 space-x-14">
                        {general == false && (
                            <Button
                                variant="contained"
                                color="primary"
                                onClick={() => {
                                    //modalの表示非表示制御
                                    setModalOpenById(gitOption.id, setEditModalIsOpen);
                                    //2連続編集押下時の表示されない問題の対応
                                    setOpenFlg(editModalFlg, setEditModalFlg);
                                    onCloseModal();
                                }}
                            >
                                編集
                            </Button>
                        )}
                        {general == false && (
                            <Button
                                variant="contained"
                                color="primary"
                                onClick={() => {
                                    //modalの表示非表示制御
                                    setModalOpenById(gitOption.id, setDeleteModalIsOpen);
                                    //2連続編集押下時の表示されない問題の対応
                                    setOpenFlg(deleteModalFlg, setDeleteModalFlg);
                                    onCloseModal();
                                }}
                            >
                                削除
                            </Button>
                        )}
                        <Button variant="contained" color="primary" onClick={onCloseModal}>
                            閉じる
                        </Button>
                    </div>
                </div>
            </CommonModal>
            {/* 編集モーダル */}
            {general == false && (
                <EditGitOptionModal
                    gitOption={gitOption}
                    IsOpen={editModalIsOpen}
                    flg={editModalFlg}
                    detailModalIsOpen={setModalIsOpen}
                    current_page={current_page}
                />
            )}
            {/* 削除モーダル */}
            {general == false && (
                <DeleteGitOptionModal
                    gitOption={gitOption}
                    IsOpen={deleteModalIsOpen}
                    flg={deleteModalFlg}
                    detailModalIsOpen={setModalIsOpen}
                    current_page={current_page}
                />
            )}
        </div>
    );
};

export default DetailGitOptionModal;
