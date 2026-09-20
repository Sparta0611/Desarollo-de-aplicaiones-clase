# Graph Report - desarollo-de-aplicaciones-en-internet  (2026-09-18)

## Corpus Check
- cluster-only mode — file stats not available

## Summary
- 767 nodes · 1428 edges · 86 communities (39 shown, 33 thin omitted)
- Extraction: 100% EXTRACTED · 0% INFERRED · 0% AMBIGUOUS · INFERRED: 5 edges (avg confidence: 0.85)
- Token cost: 0 input · 0 output

## Community Hubs (Navigation)
- two-factor-setup-modal.tsx
- index.ts
- PasswordValidationRules
- scripts
- optionalDependencies
- cn
- use-appearance.tsx
- sidebar.tsx
- dropdown-menu.tsx
- compilerOptions
- two-factor-recovery-codes.tsx
- app-header.tsx
- Illuminate\Http\Request
- components.json
- 0001_01_01_000000_create_users_table.php
- app-sidebar.tsx
- User
- FortifyServiceProvider
- utils.ts
- Laravel\Fortify\Features
- require-dev
- auth.ts
- ProfileValidationRules
- FortifyServiceProvider.php
- user-info.tsx
- dependencies
- UserFactory
- composer.json
- require
- config
- TestCase
- toggle-group.tsx
- ResetUserPassword.php
- psr-4
- laravel
- logging.php
- DatabaseSeeder.php
- placeholder-pattern.tsx
- autoload-dev
- keywords
- console.php
- icon.tsx
- clsx
- concurrently
- @inertiajs/react
- @inertiajs/vite
- input-otp
- @laravel/passkeys
- laravel-vite-plugin
- lucide-react
- @radix-ui/react-avatar
- @radix-ui/react-checkbox
- @radix-ui/react-collapsible
- @radix-ui/react-dialog
- @radix-ui/react-dropdown-menu
- @radix-ui/react-label
- @radix-ui/react-navigation-menu
- @radix-ui/react-slot
- @radix-ui/react-toggle
- @radix-ui/react-toggle-group
- @radix-ui/react-tooltip
- react
- react-dom
- sonner
- tailwind-merge
- tailwindcss
- @tailwindcss/vite
- tw-animate-css
- @types/react
- @types/react-dom
- vite
- @vitejs/plugin-react

## God Nodes (most connected - your core abstractions)
1. `cn()` - 127 edges
2. `User` - 26 edges
3. `Button()` - 22 edges
4. `InputError()` - 14 edges
5. `compilerOptions` - 14 edges
6. `scripts` - 13 edges
7. `useAppearance()` - 12 edges
8. `require-dev` - 12 edges
9. `PasswordValidationRules` - 11 edges
10. `Input()` - 11 edges

## Surprising Connections (you probably didn't know these)
- `DialogOverlay()` --calls--> `cn()`  [EXTRACTED]
  resources/js/components/ui/dialog.tsx → resources/js/lib/utils.ts
- `BreadcrumbEllipsis()` --calls--> `cn()`  [EXTRACTED]
  resources/js/components/ui/breadcrumb.tsx → resources/js/lib/utils.ts
- `CardFooter()` --calls--> `cn()`  [EXTRACTED]
  resources/js/components/ui/card.tsx → resources/js/lib/utils.ts
- `SheetFooter()` --calls--> `cn()`  [EXTRACTED]
  resources/js/components/ui/sheet.tsx → resources/js/lib/utils.ts
- `SheetOverlay()` --calls--> `cn()`  [EXTRACTED]
  resources/js/components/ui/sheet.tsx → resources/js/lib/utils.ts

## Import Cycles
- None detected.

## Communities (86 total, 33 thin omitted)

### Community 0 - "two-factor-setup-modal.tsx"
Cohesion: 0.07
Nodes (44): DeleteUser(), Heading(), InputError(), ManagePasskeys(), Props, ManageTwoFactor(), Props, PasskeyItem() (+36 more)

### Community 1 - "index.ts"
Cohesion: 0.08
Nodes (27): AppContent(), Props, AppLogo(), AppLogoIcon(), AppShell(), Props, AppSidebar(), AppSidebarHeader() (+19 more)

### Community 2 - "PasswordValidationRules"
Cohesion: 0.09
Nodes (19): PasswordValidationRules, Controller, ProfileController, SecurityController, PasswordUpdateRequest, ProfileDeleteRequest, ProfileUpdateRequest, TwoFactorAuthenticationRequest (+11 more)

### Community 3 - "scripts"
Cohesion: 0.05
Nodes (39): scripts, ci:check, dev, lint, lint:check, post-autoload-dump, post-create-project-cmd, post-root-package-install (+31 more)

### Community 4 - "optionalDependencies"
Cohesion: 0.05
Nodes (36): babel-plugin-react-compiler, @laravel/multiplex, @laravel/vite-plugin-wayfinder, lightningcss-linux-x64-gnu, lightningcss-win32-x64-msvc, devDependencies, babel-plugin-react-compiler, @laravel/vite-plugin-wayfinder (+28 more)

### Community 5 - "cn"
Cohesion: 0.13
Nodes (20): Badge(), badgeVariants, Checkbox(), NavigationMenu(), NavigationMenuContent(), NavigationMenuIndicator(), NavigationMenuItem(), NavigationMenuLink() (+12 more)

### Community 6 - "use-appearance.tsx"
Cohesion: 0.13
Nodes (21): AppearanceToggleTab(), TwoFactorSetupStep(), Appearance, applyTheme(), getStoredAppearance(), handleSystemThemeChange(), initializeTheme(), isDarkMode() (+13 more)

### Community 7 - "sidebar.tsx"
Cohesion: 0.11
Nodes (23): NavUser(), SheetDescription(), Sidebar(), SidebarContext, SidebarGroupAction(), SidebarInput(), SidebarInset(), SidebarMenuAction() (+15 more)

### Community 8 - "dropdown-menu.tsx"
Cohesion: 0.13
Nodes (16): DropdownMenu(), DropdownMenuCheckboxItem(), DropdownMenuContent(), DropdownMenuGroup(), DropdownMenuItem(), DropdownMenuLabel(), DropdownMenuRadioItem(), DropdownMenuSeparator() (+8 more)

### Community 9 - "compilerOptions"
Cohesion: 0.11
Nodes (18): resources/js/**/*.d.ts, resources/js/**/*.ts, resources/js/**/*.tsx, compilerOptions, allowJs, esModuleInterop, forceConsistentCasingInFileNames, isolatedModules (+10 more)

### Community 10 - "two-factor-recovery-codes.tsx"
Cohesion: 0.19
Nodes (13): AlertError(), Props, TwoFactorRecoveryCodes(), Alert(), AlertDescription(), AlertTitle(), alertVariants, Card() (+5 more)

### Community 11 - "app-header.tsx"
Cohesion: 0.15
Nodes (14): mainNavItems, Props, rightNavItems, Sheet(), SheetContent(), SheetFooter(), SheetHeader(), SheetOverlay() (+6 more)

### Community 12 - "Illuminate\Http\Request"
Cohesion: 0.17
Nodes (11): HandleAppearance, HandleInertiaRequests, Closure, Illuminate\Foundation\Application, Illuminate\Foundation\Configuration\Exceptions, Illuminate\Foundation\Configuration\Middleware, Illuminate\Http\Middleware\AddLinkHeadersForPreloadedAssets, Illuminate\Http\Request (+3 more)

### Community 13 - "components.json"
Cohesion: 0.11
Nodes (17): aliases, components, hooks, lib, ui, utils, iconLibrary, rsc (+9 more)

### Community 14 - "0001_01_01_000000_create_users_table.php"
Cohesion: 0.16
Nodes (3): Illuminate\Database\Migrations\Migration, Illuminate\Database\Schema\Blueprint, Illuminate\Support\Facades\Schema

### Community 15 - "app-sidebar.tsx"
Cohesion: 0.18
Nodes (15): footerNavItems, mainNavItems, NavFooter(), NavMain(), SidebarContent(), SidebarFooter(), SidebarGroup(), SidebarGroupContent() (+7 more)

### Community 16 - "User"
Cohesion: 0.17
Nodes (10): User, Illuminate\Database\Eloquent\Attributes\Fillable, Illuminate\Database\Eloquent\Attributes\Hidden, Illuminate\Database\Eloquent\Factories\HasFactory, Illuminate\Foundation\Auth\User, Illuminate\Notifications\Notifiable, Illuminate\Support\Carbon, Laravel\Fortify\Contracts\PasskeyUser (+2 more)

### Community 17 - "FortifyServiceProvider"
Cohesion: 0.17
Nodes (6): AppServiceProvider, FortifyServiceProvider, Carbon\CarbonImmutable, Illuminate\Support\Facades\Date, Illuminate\Support\Facades\DB, Illuminate\Support\ServiceProvider

### Community 18 - "utils.ts"
Cohesion: 0.25
Nodes (10): AppHeader(), Separator(), IsCurrentOrParentUrlFn, IsCurrentUrlFn, useCurrentUrl(), UseCurrentUrlReturn, WhenCurrentUrlFn, SettingsLayout() (+2 more)

### Community 19 - "Laravel\Fortify\Features"
Cohesion: 0.17
Nodes (7): Illuminate\Auth\Events\Verified, Illuminate\Auth\Notifications\ResetPassword, Illuminate\Auth\Notifications\VerifyEmail, Illuminate\Support\Facades\Event, Illuminate\Support\Facades\Notification, Illuminate\Support\Facades\URL, Laravel\Fortify\Features

### Community 20 - "require-dev"
Cohesion: 0.17
Nodes (12): require-dev, fakerphp/faker, larastan/larastan, laravel/boost, laravel/pail, laravel/pao, laravel/pint, laravel/sail (+4 more)

### Community 21 - "auth.ts"
Cohesion: 0.22
Nodes (9): Auth, Passkey, TwoFactorSecretKey, TwoFactorSetupData, User, InertiaConfig, @inertiajs/core, InputHTMLAttributes (+1 more)

### Community 22 - "ProfileValidationRules"
Cohesion: 0.29
Nodes (4): CreateNewUser, ProfileValidationRules, Illuminate\Validation\Rule, Laravel\Fortify\Contracts\CreatesNewUsers

### Community 23 - "FortifyServiceProvider.php"
Cohesion: 0.20
Nodes (5): Illuminate\Cache\RateLimiting\Limit, Illuminate\Support\Facades\RateLimiter, Illuminate\Support\Str, Laravel\Fortify\Fortify, Pdo\Mysql

### Community 24 - "user-info.tsx"
Cohesion: 0.33
Nodes (7): Avatar(), AvatarFallback(), AvatarImage(), UserInfo(), getInitial(), GetInitialsFn, useInitials()

### Community 25 - "dependencies"
Cohesion: 0.22
Nodes (9): class-variance-authority, dependencies, class-variance-authority, @radix-ui/react-select, @radix-ui/react-separator, typescript, @radix-ui/react-select, @radix-ui/react-separator (+1 more)

### Community 26 - "UserFactory"
Cohesion: 0.31
Nodes (4): UserFactory, Illuminate\Database\Eloquent\Factories\Factory, Illuminate\Support\Facades\Hash, static

### Community 27 - "composer.json"
Cohesion: 0.25
Nodes (7): description, license, minimum-stability, name, prefer-stable, $schema, type

### Community 28 - "require"
Cohesion: 0.25
Nodes (8): require, inertiajs/inertia-laravel, laravel/chisel, laravel/fortify, laravel/framework, laravel/tinker, laravel/wayfinder, php

### Community 29 - "config"
Cohesion: 0.29
Nodes (7): pestphp/pest-plugin, php-http/discovery, config, allow-plugins, optimize-autoloader, preferred-install, sort-packages

### Community 30 - "TestCase"
Cohesion: 0.29
Nodes (3): Illuminate\Foundation\Testing\RefreshDatabase, Illuminate\Foundation\Testing\TestCase, TestCase

### Community 31 - "toggle-group.tsx"
Cohesion: 0.43
Nodes (5): ToggleGroup(), ToggleGroupContext, ToggleGroupItem(), Toggle(), toggleVariants

### Community 32 - "ResetUserPassword.php"
Cohesion: 0.50
Nodes (3): ResetUserPassword, Illuminate\Support\Facades\Validator, Laravel\Fortify\Contracts\ResetsUserPasswords

### Community 33 - "psr-4"
Cohesion: 0.40
Nodes (5): autoload, psr-4, App\\, Database\\Factories\\, Database\\Seeders\\

### Community 34 - "laravel"
Cohesion: 0.40
Nodes (5): extra, laravel, post-create-project, dont-discover, installer

### Community 35 - "logging.php"
Cohesion: 0.40
Nodes (4): Monolog\Handler\NullHandler, Monolog\Handler\StreamHandler, Monolog\Handler\SyslogUdpHandler, Monolog\Processor\PsrLogMessageProcessor

### Community 36 - "DatabaseSeeder.php"
Cohesion: 0.60
Nodes (3): DatabaseSeeder, Illuminate\Database\Console\Seeds\WithoutModelEvents, Illuminate\Database\Seeder

### Community 39 - "autoload-dev"
Cohesion: 0.67
Nodes (3): autoload-dev, psr-4, Tests\\

### Community 40 - "keywords"
Cohesion: 0.67
Nodes (3): keywords, framework, laravel

## Knowledge Gaps
- **191 isolated node(s):** `Props`, `Props`, `Props`, `Props`, `Props` (+186 more)
  These have ≤1 connection - possible missing edges or undocumented components. (Counts symbols only; 298 node(s) total have ≤1 connection when file, concept and rationale nodes are included.)
- **33 thin communities (<3 nodes) omitted from report** — run `graphify query` to explore isolated nodes.

## Suggested Questions
_Questions this graph is uniquely positioned to answer:_

- **Why does `cn()` connect `cn` to `two-factor-setup-modal.tsx`, `index.ts`, `use-appearance.tsx`, `sidebar.tsx`, `dropdown-menu.tsx`, `two-factor-recovery-codes.tsx`, `app-header.tsx`, `app-sidebar.tsx`, `utils.ts`, `user-info.tsx`, `toggle-group.tsx`?**
  _High betweenness centrality (0.085) - this node is a cross-community bridge._
- **Why does `dependencies` connect `dependencies` to `optionalDependencies`, `clsx`, `concurrently`, `@inertiajs/react`, `@inertiajs/vite`, `input-otp`, `@laravel/passkeys`, `laravel-vite-plugin`, `lucide-react`, `@radix-ui/react-avatar`, `@radix-ui/react-checkbox`, `@radix-ui/react-collapsible`, `@radix-ui/react-dialog`, `@radix-ui/react-dropdown-menu`, `@radix-ui/react-label`, `@radix-ui/react-navigation-menu`, `@radix-ui/react-slot`, `@radix-ui/react-toggle`, `@radix-ui/react-toggle-group`, `@radix-ui/react-tooltip`, `react`, `react-dom`, `sonner`, `tailwind-merge`, `tailwindcss`, `@tailwindcss/vite`, `tw-animate-css`, `@types/react`, `@types/react-dom`, `vite`, `@vitejs/plugin-react`?**
  _High betweenness centrality (0.016) - this node is a cross-community bridge._
- **Why does `Button()` connect `two-factor-setup-modal.tsx` to `cn`, `sidebar.tsx`, `two-factor-recovery-codes.tsx`, `app-header.tsx`, `utils.ts`?**
  _High betweenness centrality (0.014) - this node is a cross-community bridge._
- **What connects `Props`, `Props`, `Props` to the rest of the system?**
  _191 weakly-connected nodes found - possible documentation gaps or missing edges._
- **Should `two-factor-setup-modal.tsx` be split into smaller, more focused modules?**
  _Cohesion score 0.07028112449799197 - nodes in this community are weakly interconnected._
- **Should `index.ts` be split into smaller, more focused modules?**
  _Cohesion score 0.0782312925170068 - nodes in this community are weakly interconnected._
- **Should `PasswordValidationRules` be split into smaller, more focused modules?**
  _Cohesion score 0.08974358974358974 - nodes in this community are weakly interconnected._