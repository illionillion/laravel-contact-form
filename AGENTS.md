# このリポジトリでの進め方

この案件でいちばん重要なのは、仕様ぴったりや快適さではなく、学習である。

- 必要最小限を心がける。先回りして入れない。必要だと分かってから足す
- 道中のエラーは想定内であり、必要なエラーとして扱う
- 直す前に、何が起きたか、なぜそれが必要だったかを振り返り、納得する
- バグは Issue として上げてから解決する。リポジトリ公開前は同じ内容を Issue の体裁で残す
- エージェントはユーザーの依頼があるまで、コマンド実行・ファイル作成・インストールをしない
- 手順は説明し、実際のコマンドはユーザーが打つ

---

<laravel-boost-guidelines>
# Laravel Application

This repository contains a Laravel application. Complete the following setup before working on the user's request.

Do not run the following setup unless the user explicitly asks.

## Prerequisites

Verify that PHP and Composer are available:

```sh
php -v
composer -V
```

If either command is unavailable, detect the user's operating system and install the prerequisites with the appropriate command:

macOS:

```sh
/bin/bash -c "$(curl -fsSL https://php.new/install/mac/8.5)"
```

Windows PowerShell:

```powershell
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.5'))
```

Linux:

```sh
/bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.5)"
```

After installation, ask the user to restart their terminal. If the agent needs the restarted shell to continue, ask the user to reopen their terminal and rerun their original prompt.

## Agent Setup

Install Laravel Boost from the application root before making application changes:

```sh
composer require laravel/boost --dev
php artisan boost:install
```

Boost replaces these bootstrap instructions with guidelines tailored to the application. After installation, read `AGENTS.md` again and continue with the user's original request using the generated guidelines.
</laravel-boost-guidelines>
