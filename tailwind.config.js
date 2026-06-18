import forms from '@tailwindcss/forms';

export default {
    content: [
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
        './app/**/*.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                display: ['Manrope', 'Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                mono: ['"JetBrains Mono"', 'ui-monospace', 'SFMono-Regular', 'Consolas', 'monospace'],
            },
            colors: {
                ink: '#070b0f',
                paper: '#f2f7f4',
                panel: '#0d141b',
                line: '#20313b',
                terminal: '#6ee7b7',
                cyan: '#67e8f9',
                brass: '#f6c177',
                ember: '#ef6f6c',
                moss: '#93c5a4',
            },
            boxShadow: {
                soft: '0 24px 70px rgba(0, 0, 0, 0.28)',
                glow: '0 0 48px rgba(110, 231, 183, 0.14)',
            },
        },
    },
    plugins: [forms],
};
