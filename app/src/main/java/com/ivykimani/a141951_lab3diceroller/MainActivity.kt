package com.ivykimani.a141951_lab3diceroller

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.runtime.Composable
import androidx.compose.ui.tooling.preview.Preview
import com.ivykimani.a141951_lab3diceroller.ui.theme.DiceRollerTheme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            DiceRollerTheme {
                    DiceRollerApp(
                    )
                }
            }
        }
    }


@Preview(showBackground = true)
@Composable
fun DiceRollerPreview() {
    DiceRollerTheme {
        DiceRollerApp()
    }
}
