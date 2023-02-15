import React, { useState } from 'react';
import Button from '@/Atoms/Button';
import { useForm } from '@inertiajs/inertia-react';
import axios from 'axios';

interface Props {
    user_id: number;
    command_id: number;
    type: number;
    url: string;
    git_id: number;
    redirect_url: string;
}

const FavoriteButton = ({ user_id, command_id, type, url, git_id, redirect_url }: Props) => {
    const { data, setData, post, processing, errors, reset } = useForm({
        command_id: command_id.toString(),
        user_id: user_id,
        type: type.toString(),
        parent_command_id: git_id.toString(),
        redirect_url: redirect_url,
    });

    const newCreate = ['favoriteCreate', '未登録'];
    const reRegister = ['favoriteRegister', '再登録'];
    const cancel = ['favoriteCancel', '解除'];

    //ブックマークアイコンのオン状態
    const onBookmarkIcon = (
        <svg xmlns="http://www.w3.org/2000/svg" id="_x32_" viewBox="0 0 512 512" width="32px" height="32px" opacity="1">
            <g>
                <path d="M463.511,0H27.022v512L256,361.971l228.978,150.023V0H463.511z M256,310.645L69.955,432.534V42.933h372.089 v389.601L256,310.645z" />
            </g>
        </svg>
    );
    //ブックマークアイコンのオフ状態
    const notBookmarkIcon = (
        <svg xmlns="http://www.w3.org/2000/svg" id="_x32_" viewBox="0 0 512 512" width="32px" height="32px" opacity="1">
            <g>
                <polygon points="20.317,0 20.317,512 256,426.452 491.683,512 491.683,0  " />
            </g>
        </svg>
    );

    //初期表示時のボタンテキスト変更
    const isFavoriteText = (url: string): JSX.Element => {
        if (url == newCreate[0]) {
            return onBookmarkIcon;
        } else if (url == reRegister[0]) {
            return onBookmarkIcon;
        } else {
            return notBookmarkIcon;
        }
    };

    //ボタン押下時のテキスト変更
    const isNotFavoriteText = (url: string): JSX.Element => {
        if (url == reRegister[0] || url == newCreate[0]) {
            return notBookmarkIcon;
        } else {
            return onBookmarkIcon;
        }
    };

    //ボタン押下時のURL変更
    const changeUrl = (url: string) => {
        if (url == reRegister[0] || url == newCreate[0]) {
            return cancel[0];
        } else {
            return reRegister[0];
        }
    };

    const [text, setText] = useState(isFavoriteText(url));

    const [urlState, setUrl] = useState(url);

    //更新処理を送信する
    const favorite = (e: React.FormEvent<HTMLFormElement>) => {
        //画面遷移を止める
        e.preventDefault();

        axios
            .post(route(urlState), data)

            .then(() => {
                setText(isNotFavoriteText(urlState));
                setUrl(changeUrl(urlState));
            })

            .catch(() => {
                alert('処理が正常に実行されませんでした。リロードしてください。');
            });
    };

    return (
        <form onSubmit={favorite}>
            <Button type="submit" className="ml-4" processing={processing} children={text} />
        </form>
    );
};

export default FavoriteButton;
