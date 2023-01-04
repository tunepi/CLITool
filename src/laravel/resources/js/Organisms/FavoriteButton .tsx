import React from 'react';
import Button from '@/Atoms/Button';
import Input from '@/Moleclues/Input';
import { useForm } from '@inertiajs/inertia-react';
import { useEffect } from 'react';
import { User, GitOption } from '../type';
import { Icon } from 'semantic-ui-react';

interface Props {
    user_id: number;
    command_id: number;
    type: number;
}

type Name = 'command_id' | 'user_id' | 'type';

const FavoriteButton = ({ user_id, command_id, type }: Props) => {
    const { data, setData, post, processing, errors, reset } = useForm({
        command_id: command_id.toString(),
        user_id: user_id,
        type: type.toString(),
    });

    //更新処理を送信する
    const favorite = (e: React.FormEvent<HTMLFormElement>) => {
        //画面遷移を止める
        e.preventDefault();

        post(route('gitOptionDelete'), {
            onStart: (visit) => {
                console.log(visit);
            },
            onSuccess: () => {},
        });
    };

    //テキストボックスないの値が変わるたびにvalueの値を最新のものに更新してくれる
    const onHandleChange = (event: React.ChangeEvent<HTMLInputElement>) => {
        setData(event.target.name as Name, event.target.value);
    };

    return (
        <form onSubmit={favorite}>
            <Input type="hidden" name="command_id" value={data.command_id} handleChange={onHandleChange} />
            <Input type="hidden" name="user_id" value={data.user_id} handleChange={onHandleChange} />
            <Input type="hidden" name="type" value={data.type} handleChange={onHandleChange} />
            <Button type="submit" className="ml-4 bg-gray-900" processing={processing} children="ブックマーク" />
        </form>
    );
};

export default FavoriteButton;
