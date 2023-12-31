import axios from 'axios';
import './globals.css'
// import '../public/assets/css/style.min.css'
import type { Metadata } from 'next'
import { Inter } from 'next/font/google'
const inter = Inter({ subsets: ['latin'] })
// Define Default Axios BaseURL
// axios.defaults.baseURL = process.env.NEXT_PUBLIC_API_URL; 
export const metadata: Metadata = {
  title: 'CTA Centralized Staff DB - Welcome to Portal',
  description: 'Generated by create next app',
}

export default function RootLayout({
  children,
  params
}: {
  children: React.ReactNode,
  params:string
}) {
  return (
    <html lang="en" >
      <body className={inter.className}>
            {children}
        </body>
    </html>
  )
}
