import React from 'react';
import { useState, useEffect } from 'react';
import { Button as ModalButton } from '@mui/material';
import Input from '../Moleclues/Input';
import { useForm } from '@inertiajs/inertia-react';
import Button from '../Atoms/Button';
import CommonModal from '../Moleclues/CommonModal';
import { GitOption } from '../type';

interface Props {
    gitOption: GitOption;
    IsOpen: number | undefined;
    flg: number;
    detailModalIsOpen: React.Dispatch<React.SetStateAction<number | undefined>>;
    current_page: number;
}

//event.target.nameの値宣言
type Name = 'id' | 'git_option' | 'page';

const DeleteGitOptionModal = ({ gitOption, IsOpen, flg, detailModalIsOpen, current_page }: Props) => {
    const { data, setData, post, processing } = useForm({
        id: gitOption.id,
        git_id: gitOption.git_id,
        git_option: gitOption.git_option,
        page: current_page,
    });

    //modal表示非表示用
    const [modalIsOpen, setModalIsOpen] = useState<number>();

    //modal非表示用
    const onCloseModal = (id?: string) => {
        setModalIsOpen(undefined);
        id == undefined ? alert('idが存在しません') : detailModalIsOpen(Number(id));
    };

    //userEffect:props.IsOpenの値が変わるたびにコールバック関数が呼ばれる
    useEffect(() => {
        setModalIsOpen(IsOpen);
    }, [flg]);

    //更新処理を送信する
    const deleteGitOption = (e: React.FormEvent<HTMLFormElement>) => {
        //画面遷移を止める
        e.preventDefault();

        post(route('gitOptionDelete'), {
            onSuccess: () => {
                setModalIsOpen(undefined);
            },
        });
    };

    //テキストボックスないの値が変わるたびにvalueの値を最新のものに更新してくれる
    const onHandleChange = (event: React.ChangeEvent<HTMLInputElement>) => {
        setData(event.target.name as Name, event.target.value);
    };

    return (
        <div>
            <CommonModal isOpen={gitOption.id === modalIsOpen} onRequestClose={onCloseModal} id={gitOption.id}>
                <form onSubmit={deleteGitOption}>
                    <Input type="hidden" name="id" value={data.id} handleChange={onHandleChange} />
                    <Input type="hidden" name="git_id" value={data.git_id} handleChange={onHandleChange} />
                    <Input type="hidden" name="page" value={data.page} handleChange={onHandleChange} />
                    <div className="border-2 border-block-500">
                        <div className="flex pl-10">
                            <label className={`block font-medium text-sm text-gray-700 mr-10 w-11`}>オプション名</label>
                            <div className="ml-1">{data.git_option}</div>
                        </div>
                        <div className="pl-10 mt-2">
                            <p>上記オプションを削除します。</p>
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
                                onCloseModal(gitOption.id.toString());
                            }}
                            children="戻る"
                        />
                    </div>
                </form>
            </CommonModal>
        </div>
    );
};

export default DeleteGitOptionModal;
