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
    url: string;
    git_id: number;
    redirect_url: string;
}

type Name = 'command_id' | 'user_id' | 'type' | 'parent_command_id' | 'redirect_url';

const FavoriteButton = ({ user_id, command_id, type, url, git_id, redirect_url }: Props) => {
    const { data, setData, post, processing, errors, reset } = useForm({
        command_id: command_id.toString(),
        user_id: user_id,
        type: type.toString(),
        parent_command_id: git_id.toString(),
        redirect_url: redirect_url,
    });

    //更新処理を送信する
    const favorite = (e: React.FormEvent<HTMLFormElement>) => {
        //画面遷移を止める
        e.preventDefault();

        post(route(url), {
            onStart: (visit) => {
                console.log(visit);
            },
        });
    };

    //お気に入り登録の有無
    const isFavoriteText = (url: string): string => {
        if (url == 'favoriteCreate') {
            return '未登録';
        } else if (url == 'favoriteRegister') {
            return '再登録';
        } else {
            return '解除';
        }
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
            <Input
                type="hidden"
                name="parent_command_id"
                value={data.parent_command_id}
                handleChange={onHandleChange}
            />
            <Input type="hidden" name="url" value={data.redirect_url} handleChange={onHandleChange} />
            <Button type="submit" className="ml-4 bg-gray-900" processing={processing} children={isFavoriteText(url)} />
        </form>
    );
};

export default FavoriteButton;
