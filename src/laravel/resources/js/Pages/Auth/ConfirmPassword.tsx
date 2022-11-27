import React, { useEffect } from 'react';
import Button from '@/Atoms/Button';
import Guest from '@/Templates/Guest';
import Input from '@/Moleclues/Input';
import Label from '@/Atoms/Label';
import ValidationErrors from '@/Organisms/ValidationErrors';
import { Head, useForm } from '@inertiajs/inertia-react';

export default function ConfirmPassword() {
    const { data, setData, post, processing, errors, reset } = useForm({
        password: '',
    });

    useEffect(() => {
        return () => {
            reset('password');
        };
    }, []);

    const onHandleChange = (event: React.ChangeEvent<HTMLInputElement>) => {
        setData(event.target.name as 'password', event.target.value);
    };

    const submit = (e: React.FormEvent<HTMLFormElement>) => {
        e.preventDefault();

        post(route('password.confirm'));
    };

    return (
        <Guest>
            <Head title="パスワード認証" />

            <div className="mb-4 text-sm text-gray-600">パスワードを認証してください。</div>

            <ValidationErrors errors={errors} />

            <form onSubmit={submit}>
                <div className="mt-4">
                    <Label forInput="password" value="Password" />

                    <Input
                        type="password"
                        name="password"
                        value={data.password}
                        className="mt-1 block w-full"
                        isFocused={true}
                        handleChange={onHandleChange}
                    />
                </div>

                <div className="flex items-center justify-end mt-4">
                    <Button className="ml-4 bg-gray-900" processing={processing}>
                        認証する
                    </Button>
                </div>
            </form>
        </Guest>
    );
}
