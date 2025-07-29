import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                display: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'technchange': {
                    primary: '#4F8EDB',
                    secondary: '#E91E63',
                    accent: '#FF9800',
                    dark: '#1A202C',
                    gray: '#4A5568',
                    'light-gray': '#EDF2F7',
                    success: '#10B981',
                    warning: '#F59E0B',
                    danger: '#EF4444',
                }
            },
            animation: {
                'fade-in-up': 'fadeInUp 0.8s ease-out',
                'slide-in-right': 'slideInRight 0.8s ease-out',
                'slide-in-up': 'slideInUp 0.6s ease-out',
                'bounce-slow': 'bounce 2s infinite',
                'pulse-slow': 'pulse 3s infinite',
                'scroll': 'scroll 30s linear infinite',
            },
            keyframes: {
                fadeInUp: {
                    '0%': { opacity: '0', transform: 'translateY(30px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                slideInUp: {
                    '0%': { opacity: '0', transform: 'translateY(20px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                scroll: {
                    '0%': { transform: 'translateX(0)' },
                    '100%': { transform: 'translateX(-50%)' },
                },
            },
            backdropBlur: {
                xs: '2px',
            },
        },
    },

    plugins: [forms, typography],
};
