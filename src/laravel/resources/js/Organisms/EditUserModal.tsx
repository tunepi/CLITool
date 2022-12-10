import React from 'react';
import { useState, useEffect } from 'react';
import { Button as ModalButton } from '@mui/material';
import Input from '../Moleclues/Input';
import ValidationErrors from '@/Organisms/ValidationErrors';
import { useForm } from '@inertiajs/inertia-react';
import Label from '../Atoms/Label';
import Button from '../Atoms/Button';
import SelectBox from '../Moleclues/SelectBox';
import CommonModal from '../Moleclues/CommonModal';
import CheckRoll from '../Atoms/CheckRoll';

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
    detailModalIsOpen: React.Dispatch<React.SetStateAction<string>>;
    current_page: number;
    isProfile?: number;
}
//event.target.nameの値宣言
type Name = 'id' | 'name' | 'email' | 'created_at' | 'page' | 'roll';

const EditUserModal = ({ user, IsOpen, flg, detailModalIsOpen, current_page, isProfile }: Props) => {
    //useFormで使用する変数の宣言
    const { data, setData, post, processing, errors } = useForm({
        id: user.id,
        name: user.name,
        email: user.email,
        roll: user.roll,
        created_at: user.created_at,
        page: current_page,
    });

    //modal表示非表示用
    const [modalIsOpen, setModalIsOpen] = useState<string>('');

    //modal非表示用
    const onCloseModal = (id?: string) => {
        setModalIsOpen('');
        id == undefined ? alert('idが存在しません') : detailModalIsOpen(id);
    };

    //userEffect:props.IsOpenの値が変わるたびにコールバック関数が呼ばれる
    useEffect(() => {
        setModalIsOpen(IsOpen);
    }, [flg]);

    //更新処理を送信する
    const submit = (e: React.FormEvent<HTMLFormElement>) => {
        //画面遷移を止める
        e.preventDefault();

        post(route('userUpdate'), {
            onStart: (visit) => {
                console.log(visit);
            },
            onSuccess: () => {
                setModalIsOpen('');
            },
        });
    };

    //テキストボックスないの値が変わるたびにvalueの値を最新のものに更新してくれる
    const onHandleChange = (event: React.ChangeEvent<HTMLInputElement>) => {
        setData(event.target.name as Name, event.target.value);
    };

    //selectBox用関数
    const onHandleChangeBySelected = (event: React.ChangeEvent<HTMLSelectElement>) => {
        setData(event.target.name as 'roll', event.target.value);
    };

    console.log(user.roll == '管理者' ? '1' : '0');

    return (
        <CommonModal isOpen={user.id === modalIsOpen} onRequestClose={onCloseModal} id={user.id}>
            <form onSubmit={submit}>
                <ValidationErrors errors={errors} />
                <Input type="hidden" name="id" value={data.id} handleChange={onHandleChange} />
                <Input type="hidden" name="page" value={data.page} handleChange={onHandleChange} />
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
                    {isProfile == 1 ? (
                        <div className="ml-1">
                            {CheckRoll(data.roll)}
                            <Input type="hidden" name="roll" value={data.roll} handleChange={onHandleChange} />
                        </div>
                    ) : (
                        <SelectBox
                            options={['一般', '管理者']}
                            name={'roll'}
                            defaultValue={data.roll}
                            handleChange={onHandleChangeBySelected}
                            className={
                                'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm'
                            }
                        />
                    )}
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
                            onCloseModal(user.id);
                        }}
                        children="戻る"
                    />
                </div>
            </form>
        </CommonModal>
    );
};

export default EditUserModal;
